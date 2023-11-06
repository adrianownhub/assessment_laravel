<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.Name', 'Signup') }}</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset('vendors/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
    </head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/index') }}" class="h1"><b>Assessment</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign Up Now</p>
                <form method="post" action="{{ route('signup.create') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="fullname"
                            placeholder="Fullname" required="required" autofocus>
                        <label for="floatingName">Fullname</label>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="username"
                            placeholder="Username" required="required" autofocus>
                        <label for="floatingName">Username</label>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password"
                            placeholder="Password" required="required">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
                        </div>
                    </div>


                </form>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
