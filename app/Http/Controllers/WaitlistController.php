<?php

namespace App\Http\Controllers;

use App\Models\AdminLogin;
use App\Models\WaitingList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class WaitlistController extends Controller
{

    public function index()
    {
        $counts = WaitingList::select('user_type')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('user_type')
            ->pluck('total', 'user_type'); // This gives: ['student' => 5, 'parent' => 3, ...]

        return view('welcome', compact('counts'));
    }
    public function store(Request $request)
    {


        $validated = $request->validate([
            'user_type' => ['required', Rule::in(['parent', 'teacher', 'school', 'creator'])],

            'firstname' => ['required', 'string', 'max:255'],
            'othername' => ['nullable', 'string', 'max:255'],

            'school' => [
                Rule::requiredIf(in_array($request->user_type, ['parent', 'teacher'])),
                'string',
                'max:255',
                'nullable' // still allow null if empty
            ],
            'phone' => [
                Rule::requiredIf(in_array($request->user_type, ['parent', 'teacher', 'school', 'creator'])),
                'string',
                'max:255',
                'nullable'
            ],
            'email' => [
                Rule::requiredIf(in_array($request->user_type, ['parent', 'teacher', 'school', 'creator'])),
                'email',
                'max:255',
                'nullable'
            ],

            'school_name' => [
                Rule::requiredIf($request->user_type === 'school'),
                'string',
                'max:255',
                'nullable'
            ],
            'contact_person' => [
                Rule::requiredIf($request->user_type === 'school'),
                'string',
                'max:255',
                'nullable'
            ],
            'contact_person_contact' => [
                Rule::requiredIf($request->user_type === 'school'),
                'string',
                'max:255',
                'nullable'
            ],

            'platform' => [
                Rule::requiredIf($request->user_type === 'creator'),
                'string',
                'max:255',
                'nullable'
            ],
            'profile_link' => [
                Rule::requiredIf($request->user_type === 'creator'),
                'url',
                'max:255',
                'nullable'
            ],
            'content_area' => [
                Rule::requiredIf($request->user_type === 'creator'),
                'string',
                'max:255',
                'nullable'
            ],
        ]);

        if (!empty($validated['email'])) {

            $existingUser = WaitingList::where('email', $validated['email'])->first();

            if ($existingUser) {
                return response()->json([
                    'status' => 'already_exists',
                    'message' => 'This email is already on the waitlist.',
                ], 200);
            }
        }

        WaitingList::create($validated);


         // Send welcome email
    
        $data = [
            'userName' => $validated['firstname'],
            'userType' => $validated['user_type'],
        ];

        Mail::send('emails.waitlist-welcome', $data, function ($message) use ($validated) {
            $message->subject("🎉 Welcome to the SabiHub Waitlist!");
            $message->from(config('mail.from.address'), config('mail.from.name'));
            $message->to($validated['email']);
        });
    


        return response()->json([
            'status' => 'new_user',
            'message' => 'Successfully saved. Welcome to the waitlist!',
        ], 201);
        
    }


     public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $admin = AdminLogin::where('email', $request->email)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        Session::put('admin_id', $admin->id);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Session::forget('admin_id');
        return redirect()->route('login');
    }

    public function dashboard()
    {
          if (!session()->has('admin_id')) {
                return redirect()->route('admin.login');
            }

            // Get counts per user_type
            $counts = WaitingList::select('user_type')
                ->selectRaw('COUNT(*) as total')
                ->groupBy('user_type')
                ->pluck('total', 'user_type');

            // Get all waitlist records
            $allUsers = WaitingList::latest()->get();

            return view('dashboard', compact('counts', 'allUsers'));
    }
}


