<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ALL-In Eduspace</title>
        <link href="{{ asset('favicon.png') }}" rel="icon">
        
        {{-- Google Font --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
        @vite('public/css/bootstrap.min.css')
        @vite('public/css/admin/app.css')
        <style>
            .alert {
                font-size: 12px;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container login">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4"> 
                            <a href="/" class="logo d-flex align-items-center w-auto">
                                <img class="img-fluid" src="{{ asset('assets/img/logo/logo-allin.png') }}" alt="">
                            </a>
                        </div>
                        <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Login to Admin Account</h5>
                                <p class="text-center small">Enter admin email & password to login</p>
                            </div>
                            <form class="row g-3" action="{{ route('admin-login') }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="yourEmail" class="form-label h6">Email</label>
                                    <input type="email" name="email" class="form-control" id="yourEmail">
                                    @error('email')
                                        <small class="alert text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword">
                                    @error('password')
                                        <small class="alert text-danger">{{ $message }}</small>
                                    @enderror
                                    {{-- @if (session()->has('error-password'))
                                        <small class="alert text-danger">{{session()->get('error-password')}}</small>
                                    @endif --}}
                                </div>
                                <div class="col-12 my-4">
                                    <button class="btn btn-primary w-100" type="submit" style="font-size: 14px !important">Login</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>

        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script>
            // function oldEmail(){
            //     var email = document.getElementById('yourEmail');
            //     if (email.value != null) {
                    
            //     }
            // }
        </script>
    </body>
</html>