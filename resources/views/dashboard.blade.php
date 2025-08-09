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
        <link rel="apple-touch-icon" href="/assets/img/favicons/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png" />
        <link rel="apple-touch-icon" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png" />
        <link rel="android-chrome" sizes="192x192" href="/assets/img/favicons/android-chrome-192x192.png" />
        <link rel="android-chrome" sizes="512x512" href="/assets/img/favicons/android-chrome-512x512.png" />

        <!-- Title -->
        <title>SabiHub - Dashboard</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Data Table CSS -->
        <link href="/assets/css/datatables.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/assets/css/style.css" rel="stylesheet">
        <link href="/assets/css/responsive.css" rel="stylesheet">

    </head>
    <body class="dashboard">

         <header class="px-3 px-md-5">
            <nav class="d-flex justify-content-between align-items-center py-3 gap-5">
                <div class="nav-logo d-flex align-items-center ">
                    <img src="/img/logo.png" class="nav-logo_img" alt="SabiHub">
                </div>
                <div class="nav-social d-flex gap-3 align-items-center">
                 
                    <div class="d-none d-md-flex gap-2 align-items-center">
                            <img src="/assets/img/svg/Ellipse 1.svg" alt="SabiHub" height="40" width="auto">
                            <p class="mb-0">SabiHub's Admin</p>
                    </div>
                    <button class="d-flex justify-content-center align-items-center d-md-none toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive" >
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 6h18M3 12h18M3 18h18" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>

                </div>
            </nav>
        </header>



        <section class="main-content flex-grow-1">
            <div class="px-4 px-lg-5 h-100 d-flex mt-md-5 mt-4 gap-4">
                
                <div class="sidebar mt-md-4 offcanvas-md offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
                    <div class="offcanvas-header d-flex d-md-none justify-content-between mb-4 align-items-center">
                        <div class="d-flex gap-2 align-items-center">
                            <img src="/assets/img/svg/Ellipse 1.svg" alt="SabiHub" height="40" width="auto">
                            <p class="mb-0">SabiHub's Admin </p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                      </div>
                    
                    <div class="top-sidebar">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="index.html" class="d-flex align-items-center gap-4 active">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.8838 6.61598L8.88376 1.61598C8.64935 1.38164 8.33146 1.25 8.00001 1.25C7.66855 1.25 7.35067 1.38164 7.11626 1.61598L2.11626 6.61598C1.99971 6.73181 1.90732 6.86963 1.84445 7.02145C1.78158 7.17326 1.74948 7.33604 1.75001 7.50036V13.5004C1.75001 13.6993 1.82902 13.89 1.96968 14.0307C2.11033 14.1713 2.30109 14.2504 2.50001 14.2504H6.50001C6.69892 14.2504 6.88968 14.1713 7.03034 14.0307C7.17099 13.89 7.25001 13.6993 7.25001 13.5004V10.2504H8.75001V13.5004C8.75001 13.6993 8.82902 13.89 8.96968 14.0307C9.11033 14.1713 9.30109 14.2504 9.50001 14.2504H13.5C13.6989 14.2504 13.8897 14.1713 14.0303 14.0307C14.171 13.89 14.25 13.6993 14.25 13.5004V7.50036C14.2505 7.33604 14.2184 7.17326 14.1556 7.02145C14.0927 6.86963 14.0003 6.73181 13.8838 6.61598ZM12.75 12.7504H10.25V9.50036C10.25 9.30145 10.171 9.11068 10.0303 8.97003C9.88968 8.82938 9.69892 8.75036 9.50001 8.75036H6.50001C6.30109 8.75036 6.11033 8.82938 5.96968 8.97003C5.82902 9.11068 5.75001 9.30145 5.75001 9.50036V12.7504H3.25001V7.60348L8.00001 2.85348L12.75 7.60348V12.7504Z" fill="url(#paint0_linear_204_1221)"/>
                                        <defs>
                                            <linearGradient id="paint0_linear_204_1221" x1="-0.473843" y1="9.62337" x2="6.92065" y2="-0.882365" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#ee390f"/>
                                                <stop offset="1" stop-color="#f9b700"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                   <p>Home</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="dashboard-content">

                    <div class="dashboard-content_balance row row-cols-1 row-cols-md-5  mb-2" style="box-sizing: border-box;">
                       
                        <div class="col mb-3">
                            <div class="balance-card edu-paid">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="balance-card_subtitle fw-light">All Teachers</p>
                                    <p class="fw-semibold"></p>
                                </div>
                                <p class="balance-card_title mt-2 fw-medium">{{ $counts['teacher'] ?? 0 }}</p>
                            </div>
                        </div>

                         <div class="col mb-3">
                            <div class="balance-card edu-paid">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="balance-card_subtitle fw-light">All Parents</p>
                                    <p class="fw-semibold"></p>
                                </div>
                                <p class="balance-card_title mt-2 fw-medium">{{ $counts['parent'] ?? 0 }}</p>
                            </div>
                        </div>

                         <div class="col mb-3">
                            <div class="balance-card edu-paid">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="balance-card_subtitle fw-light">All Creators</p>
                                    <p class="fw-semibold"></p>
                                </div>
                                <p class="balance-card_title mt-2 fw-medium">{{ $counts['creator'] ?? 0 }}</p>
                            </div>
                        </div>

                         <div class="col mb-3">
                            <div class="balance-card edu-paid">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="balance-card_subtitle fw-light">All Schools</p>
                                    <p class="fw-semibold"></p>
                                </div>
                                <p class="balance-card_title mt-2 fw-medium">{{ $counts['school'] ?? 0 }}</p>
                            </div>
                        </div>

                         <div class="col mb-3">
                            <div class="balance-card edu-paid">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="balance-card_subtitle fw-light">All Students</p>
                                    <p class="fw-semibold"></p>
                                </div>
                                <p class="balance-card_title mt-2 fw-medium">{{ $counts['student'] ?? 0 }}</p>
                            </div>
                        </div>

                    </div>


                    
                 <div class="dashboard-content_details mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover" id="members">
                            <thead>
                                <tr class="table-light text-center">
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Date Joined</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allUsers as $index => $user)
                                    <tr class="clickable-row text-center"
                                        data-user_type="{{ $user->user_type }}"
                                        data-name="{{ $user->firstname }} {{ $user->othername }}"
                                        data-date="{{ $user->created_at }}"
                                        data-school="{{ $user->school }}"
                                        data-phone="{{ $user->phone }}"
                                        data-email="{{ $user->email }}"
                                        data-school_name="{{ $user->school_name }}"
                                        data-contact_person="{{ $user->contact_person }}"
                                        data-contact_person_contact="{{ $user->contact_person_contact }}"
                                    >
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->firstname }} {{ $user->othername }}</td>
                                        <td>{{ $user->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


            <!-- User Details Modal -->
            <div class="modal fade" id="userDetailsModal" tabindex="-1" role="dialog" aria-labelledby="userDetailsModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userDetailsModalLabel">User Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>User Type:</strong> <span id="modal_user_type"></span></p>
                            <p><strong>Full Name:</strong> <span id="modal_name"></span></p>
                            <p><strong>Date Joined:</strong> <span id="modal_date"></span></p>
                            <p><strong>School:</strong> <span id="modal_school"></span></p>
                            <p><strong>Phone:</strong> <span id="modal_phone"></span></p>
                            <p><strong>Email:</strong> <span id="modal_email"></span></p>
                            <p><strong>School Name:</strong> <span id="modal_school_name"></span></p>
                            <p><strong>Contact Person:</strong> <span id="modal_contact_person"></span></p>
                            <p><strong>Contact Person Contact:</strong> <span id="modal_contact_person_contact"></span></p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        
       

        

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        
        {{-- <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        --}}
        <!-- Data Table JS-->
        <script src="/assets/js/datatables.min.js"></script>

        <!-- Custom JS -->
        <script src="/assets/js/main.js"></script>


        <script>
            $(document).ready(function () {
                $('.clickable-row').on('click', function () {
                    $('#modal_user_type').text($(this).data('user_type'));
                    $('#modal_name').text($(this).data('name'));
                    $('#modal_date').text($(this).data('date'));
                    $('#modal_school').text($(this).data('school'));
                    $('#modal_phone').text($(this).data('phone'));
                    $('#modal_email').text($(this).data('email'));
                    $('#modal_school_name').text($(this).data('school_name'));
                    $('#modal_contact_person').text($(this).data('contact_person'));
                    $('#modal_contact_person_contact').text($(this).data('contact_person_contact'));

                    $('#userDetailsModal').modal('show');
                });
            });
        </script>
        
    </body>
</html>