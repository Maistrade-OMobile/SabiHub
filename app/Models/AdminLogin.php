<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AdminLogin extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'admin_logins';

    protected $fillable = ['email', 'password'];

    protected $hidden = ['password'];
}
