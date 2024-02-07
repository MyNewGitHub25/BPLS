<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Busines Permit and Licensing Online System" name="description"/>

         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
         <link rel="stylesheet" href="{{ asset('css/login.css') }}">
         <link href="{{ asset('js/app.js') }}">
         <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
         <title>User Login</title>
    </head>
    <body>
        <div class="container text-center">
              <form method="POST" action="{{ route('LoginValidation') }}"> 
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
                                    <div class="input-group p-2 mb-n2">
                                          <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-at"></i></span>
                                          </div>
                                          <input id='inputuser' name ='email' type="email" class="form-control" placeholder="Email or Username" aria-label="Email" aria-describedby="basic-addon1" required>
                                          @error('email')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                          @enderror
                                    </div>
                                    <div class="input-group p-2 mb-n2">
                                          <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                          </div>
                                          <input id="inputpass" name ='password' type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                                          @error('password')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                          @enderror
                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto my-4">
                                          <h6>Forgot your password</h6>   
                                          <button class="btn btn-success" type="submit"><span>Login Account</span></button>
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