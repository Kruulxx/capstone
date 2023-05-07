
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFMS-LOGIN</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
</head>

<body>
<div id="auth">    
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
               <div class="auth-logo text-center mb-5">
                    <a href="{{ url("/") }}"><img src="assets/images/sidebar_logo.png" alt="Logo"
                     class="w-50 h-50"  srcset=""></a><br>
                     <div class="mt-2">
                         <h5>
                             School Forms Management System
                         </h5>
                     </div>
                </div>
        
        
    
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group position-relative mb-4">
                        <input id="email" type="email" class="form-control form-control-l @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address" >
                        {{-- <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div> --}}
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                    <div class="form-group position-relative mb-4">
                        <input id="password" type="password" class="form-control form-control-l @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        {{-- <div class="form-control-icon"> has-icon-left 
                            <i class="bi bi-shield-lock"></i>
                        </div> --}}
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary  btn-block btn-l shadow-lg mt-3">Log in</button>
                    <div>
                    <p class="text-gray-600">Don't have an account? <a href="register.blade.php" class="font-bold">Sign
                        up</a>.</p>
                    </div>
                </form>
          
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
             
            </div>
        </div>
    </div>
    </div>
</body>

</html>

