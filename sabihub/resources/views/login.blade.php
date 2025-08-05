<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tag -->
        <meta charset="UTF-8">
        <meta name="author" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="" />
        <meta name="description" content="" />

        <!-- favicon -->
        <link rel="shortcut icon" href="/assets/img/favicons/favicon.ico" />
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="16x16" href="assets/img/favicons/favicon-16x16.png" />
        <link rel="apple-touch-icon" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png" />
        <link rel="android-chrome" sizes="192x192" href="/assets/img/favicons/android-chrome-192x192.png" />
        <link rel="android-chrome" sizes="512x512" href="/assets/img/favicons/android-chrome-512x512.png" />

        <!-- Title -->
        <title>SabiHub - Login</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Data Table CSS -->
        <link href="/assets/css/datatables.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/assets/css/style.css" rel="stylesheet"/>

    </head>
    <body class="member">
        <div class="floating-elements">
            <div class="floating-icon">🎓</div>
            <div class="floating-icon">📚</div>
            <div class="floating-icon">🏫</div>
        </div>

        <div class="member-container container d-flex justify-content-between align-items-center">
            <div class="col-12 col-md-6">
                <div class="login-card">
                    <div class="text-center mb-4">
                        <p class="member-container_title">Login</p> 
                     
                    </div>
                    
                    <div class="modal-form">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.login.submit') }}" method="POST" id="">
                            @csrf
                            <div class="text-start mb-3">
                                <label for="email" class="form-label fw-bold">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address" required>
                            </div>

                            <div class="text-start mb-3">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Remember me
                                </label>
                            </div>

                            <button type="submit" class="btn btn-pay-gradient w-100 mt-3">
                                Sign In
                            </button>

                            <div class="forgot-password">
                                <a href="#" onclick="showForgotPassword()">Forgot your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 d-none d-md-block">
                <div class="educational-side">
                    <svg class="educational-image" viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background -->
                        <rect width="400" height="300" fill="url(#grad1)"/>
                        
                        <!-- Gradient definition -->
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#ee390f;stop-opacity:0.8" />
                                <stop offset="100%" style="stop-color:#f97c00;stop-opacity:0.9" />
                            </linearGradient>
                            <linearGradient id="bookGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#4299e1;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#3182ce;stop-opacity:1" />
                            </linearGradient>
                        </defs>
                        
                        <!-- Books stack -->
                        <rect x="150" y="180" width="100" height="15" fill="#e53e3e" rx="2"/>
                        <rect x="145" y="165" width="110" height="15" fill="#38a169" rx="2"/>
                        <rect x="155" y="150" width="90" height="15" fill="#3182ce" rx="2"/>
                        <rect x="160" y="135" width="80" height="15" fill="#d69e2e" rx="2"/>
                        
                        <!-- Graduation cap -->
                        <polygon points="200,120 170,130 230,130" fill="#2d3748"/>
                        <rect x="195" y="115" width="10" height="20" fill="#2d3748"/>
                        <circle cx="200" cy="125" r="3" fill="#e53e3e"/>
                        
                        <!-- Students -->
                        <circle cx="120" cy="200" r="15" fill="#fbb6ce"/>
                        <rect x="110" y="215" width="20" height="30" fill="#4299e1" rx="5"/>
                        <rect x="115" y="225" width="10" height="15" fill="#2b6cb0"/>
                        
                        <circle cx="280" cy="205" r="15" fill="#fbb6ce"/>
                        <rect x="270" y="220" width="20" height="25" fill="#48bb78" rx="5"/>
                        <rect x="275" y="230" width="10" height="12" fill="#2f855a"/>
                        
                        <!-- Knowledge symbols floating -->
                        <text x="80" y="100" font-family="Arial" font-size="20" fill="rgba(255,255,255,0.6)">💡</text>
                        <text x="320" y="120" font-family="Arial" font-size="18" fill="rgba(255,255,255,0.5)">🎓</text>
                        <text x="60" y="250" font-family="Arial" font-size="16" fill="rgba(255,255,255,0.4)">📖</text>
                        <text x="340" y="260" font-family="Arial" font-size="22" fill="rgba(255,255,255,0.6)">🏆</text>
                        
                        <!-- Connecting lines (knowledge flow) -->
                        <path d="M 120 185 Q 200 160 280 190" stroke="rgba(255,255,255,0.3)" stroke-width="2" fill="none"/>
                        <path d="M 150 100 Q 200 80 250 100" stroke="rgba(255,255,255,0.2)" stroke-width="1" fill="none"/>
                    </svg>
                    
                    
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
       
        <!-- Data Table JS-->
        <script src="../assets/js/datatables.min.js"></script>

        <!-- Custom JS -->
        <script>
            // Form validation and submission
            document.getElementById('loginForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                
                if (!email || !password) {
                    alert('Please fill in all fields');
                    return;
                }
                
                // Add loading state
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Signing In...';
                submitBtn.disabled = false;
                
                // Simulate login process
                
            });
            
            function showForgotPassword() {
                alert('Forgot password functionality would be implemented here.');
            }
            
            // Add smooth animations
            document.addEventListener('DOMContentLoaded', function() {
                const loginCard = document.querySelector('.login-card');
                const educationalSide = document.querySelector('.educational-side');
                
                // Animate login card
                loginCard.style.opacity = '0';
                loginCard.style.transform = 'translateY(30px)';
                
                setTimeout(() => {
                    loginCard.style.transition = 'all 0.6s ease';
                    loginCard.style.opacity = '1';
                    loginCard.style.transform = 'translateY(0)';
                }, 100);
                
                // Animate educational side
                if (educationalSide) {
                    educationalSide.style.opacity = '0';
                    educationalSide.style.transform = 'translateX(30px)';
                    
                    setTimeout(() => {
                        educationalSide.style.transition = 'all 0.6s ease';
                        educationalSide.style.opacity = '1';
                        educationalSide.style.transform = 'translateX(0)';
                    }, 300);
                }
            });
        </script>
        
    </body>
</html>