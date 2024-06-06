<!--
************************************************************************************************
                        Book for Fix
                        Development Date : 14-03-2024
                        Development Date   : 16-03-2024
************************************************************************************************
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Area | {{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('backend/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('backend/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('backend/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('backend/images/favicon/site.webmanifest')}}">
    <link href="{{url('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{url('backend/css/admin.min.css') }}" rel="stylesheet">
    <script src="{{url('backend/vendor/sweetalert/sweetalert.min.js')}}"></script>
    <style>
        body {
            background-color: #E9ECF0;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
            height:100%;
        }
        a:hover{
            text-decoration:none;
        }
    </style>
</head>
<body class="">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="{{url('backend/images/logo.png')}}" height="70px" alt="{{config('app.name')}}"><br><br>
                                    <h1 class="h5 text-gray-900 mb-4">Login Area</h1>
                                </div>
                                @if (session()->has('error'))
                                    <div class="alert alert-danger">
                                        <p>{{ session()->get('error'); }}</p>
                                    </div>
                                @endif
                                <form class="user" method="post" action="{{ url('/admin/login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="text" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required="">
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-info btn-user btn-block mt-4" value="Login">
                                </form>
                                <center style="margin-top:20px;">
                                    <a class="mb-4 text-info" href="{{ url('/') }}">Back to Home</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{url('backend/js/admin.min.js')}}"></script>
<script src="{{url('backend/vendor/jquery/jquery.min.js')}}"></script>
</body>
</html>
