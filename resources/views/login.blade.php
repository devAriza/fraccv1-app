<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - UPPue</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body class="bg-gradient-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url("&quot;assets/img/dogs/image3.jpeg&quot";);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">¡Bienvenido!</h4>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('validar') }}">
                                        {{csrf_field()}}
                                        @if($errors->first('inputEmail'))
                                            <div class="alert alert-dismissible alert-danger">{{$errors->first('inputEmail')}}</div>
                                        @endif                                 
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="inputEmail" aria-describedby="emailHelp" placeholder="Ingrese correo electrónico" name="inputEmail"></div>
                                        @if($errors->first('inputPassword'))
                                            <div class="alert alert-dismissible alert-danger">{{$errors->first('inputPassword')}}</div>
                                        @endif   
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="inputPassword" placeholder="Contraseña" name="inputPassword"></div>
                                        <div class="mb-3">
                                            <div class="custom-checkbox small"></div>
                                        </div><button class="btn btn-secondary d-block btn-user w-100" type="submit">Login</button>
                                    </form>
                                    @if(Session::has('mensaje'))
                                        <div class="alert alert-dismissible alert-danger">{{Session::get('mensaje')}}</div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>