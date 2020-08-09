<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Politeknik Harapan Bersama</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description">
    <meta content="Mannatthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('template/images/phb.png')}}">
    <!-- App css -->
    <link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('template/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('template/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('template/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/app.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="account-body accountbg">
    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100">
            <div class="col-12 align-self-center">
                    @if ($message = Session::get('warning'))
                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                                aria-hidden="true">×</span> </button>
                        <h3 class="text-success"><i class="fa fa-check-circle"></i>Password atau Email Salah</h3> {{ $message }}
                    </div>
                    @endif
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                                <div class="auth-logo-box">
                                    <a href="{{asset('template/css/dashboard/analytics-index.html')}}" class="logo logo-admin"><img src="{{asset('template/images/phb.png')}}" height="55" alt="logo" class="auth-logo"></a>
                                </div>
                                <!--end auth-logo-box-->
                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-5">Reset Password Pengguna</h4>
                                    <p class="text-muted mb-0">Reset Password to Organisasi Mahasiswa Politeknik Harapan Bersama</p>
                                </div>
                                <!--end auth-logo-text-->
                                <form class="form-horizontal auth-form my-4" action={{route('pengguna.password.reset.submit')}} method="post">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group">
                                        <label for="username">Email</label>
                                        <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-user"></i> </span>
                                            <input class="form-control" readonly type="email" name="email" required value="{{ $email }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-lock"></i> </span>
                                            <input class="form-control @error('password') is-invalid @enderror"
                                            type="password" placeholder="Enter password" name="password" required>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Konfirmasi Password</label>
                                        <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-lock"></i> </span>
                                            <input class="form-control"
                                            type="password" placeholder="Konfirmasi password" name="password_confirmation" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="submit">Send<i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end form-group-->
                                </form>
                                
                                <!--end form-->
                            </div>
                          
                    </div>
                    <!--end card-->
                </div>
                <!--end auth-page-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- End Log In page -->
    <!-- jQuery  -->
    <script src="{{asset('template/js/jquery.min.js')}}"></script>
    <script src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('template/js/waves.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.slimscroll.min.js')}}"></script>
    <!-- App js -->
    <script src="{{asset('template/js/app.js')}}"></script>
</body>

</html>
