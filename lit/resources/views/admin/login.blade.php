<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{('assets/images/logo.jpg')}}">

        <!-- App css -->
        <link href="{{('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="{{('assets/images/logo.jpg')}}" alt="" width="100" height="100"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>

                                <form class="login-form"  method="POST" action="logindb" >
                                @csrf
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit" value="login"> Log In </button>
                                    </div>

                                </form>


                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <!-- <p> <a href="forgot" class="text-white-50 ml-1">Forgot your password?</a></p> -->
                             
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
           <!-- Design & Development by <a href="" class="text-white-50"></a>  -->
        </footer>

        <!-- Vendor js -->
        <script src="{{('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{('assets/js/app.min.js')}}"></script>
        
    </body>
</html>