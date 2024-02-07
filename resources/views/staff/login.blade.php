<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Busines Permit and Licensing Online System" name="description"/>

         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
         <link rel="stylesheet" href="{{ asset('css/login.css') }}">
         <script src="{{ asset(mix('resources/js/staff/login.js')) }}" defer></script>
         <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
         <title>User Login</title>

    </head>
    <body>
        <div class="container text-center">
              {{-- <form method="POST" action="{{ route('LoginValidation') }}">  --}}
            <form id="staff-login-form">
                  @csrf
                        <div class="row align-items-center">
                              <div class="col-lg">
                                    <img src="{{ asset('image/bplologo.png') }}">
                                    {{-- <h2 class="logo">B.P.L.O.S</h2> --}}
                                    <h6 class="logo-description">Business Permit and Licensing Online System</h6>
                              </div>
                        </div>

                        <div class="row align-items-center">
                              <div class="col-lg">
                                    <div class="alert d-none" id="disp-alert" role="alert"></div>
                                    <div class="input-group p-2 mb-n2">
                                          {{-- @if(session('success'))
                                                <div class="alert alert-success w-100 rounded-1 h-75" role="alert">
                                                      {{ session('success') }}
                                                      <script>
                                                            setTimeout(function() {
                                                                window.location.href = "{{ route('Dashboard') }}";
                                                            }, 1000); // Redirect after 3 seconds
                                                      </script>
                                                </div>
                                          @endif
                                          @if (session('failed'))
                                                <div class="alert alert-danger w-100 rounded-1 h-75" role="alert">
                                                      {{ session('failed') }}
                                                </div>
                                          @endif --}}
                                          <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-at"></i></span>
                                          </div>
                                          <input id='username' name ='email' type="email" class="form-control" placeholder="Email or Username" aria-label="Email" aria-describedby="basic-addon1" required>
                                          <div class="invalid-feedback"><span>Valid username is required</span></div>
                                    </div>
                                    <div class="input-group p-2 mb-n2">
                                          <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                          </div>
                                          <input id="password" name ='password' type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                                          <div class="invalid-feedback">Valid password is required</div>
                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto my-4">
                                          <h6>Forgot your password</h6>
                                          <button id="btn-staff-login" class="btn btn-success" type="submit"><span>Login Account</span></button>
                                          
                                    </div>
                              </div>
                        </div>
              </form>
        </div>

        <div class="row align-items-center">
              <div class="col">
                    <h6 class="Copyright">Copyright © 2024 City Government of Paranaque. All rights reserved.</h6>
              </div>
        </div>

    </body>
</html>