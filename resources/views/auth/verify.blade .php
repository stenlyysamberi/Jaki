
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ $title1 }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

		<!-- App css -->
		<link href="../assets/css/bootstrap-material.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="../assets/css/app-material.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="../assets/css/bootstrap-material-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="../assets/css/app-material-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                {{-- <div class="text-center mb-4">
                                    <div class="auth-logo">
                                        <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="../assets/images/logo-dark.png" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="../assets/images/logo-light.png" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                </div> --}}
                                
                                      
                                @if (session('masuk'))
                                <div class="alert alert-danger" role="alert">
                                    <i class="mdi mdi-check-all mr-2"></i>  {{ session('masuk') }}
                                </div>
                             @endif

                                <div class="text-center w-75 m-auto">
                                    <img src="" height="88" alt="user-image" class="rounded-circle shadow">
                                    <h4 class="text-dark-50 text-center mt-3">Hi ! Selamat Datang </h4>
                                    <p class="text-muted mb-4">Enter your password to access the admin.</p>
                                </div>


                                <form action="/login" method="POST">
                                        @csrf
                                    <div class="form-group mb-3">
                                        <label for="password">Phone</label>
                                        <input autofocus class="form-control mb-1" type="text" required="" name="phone" placeholder="Phone">
                                       <a href="">Check Token</a>
                                       
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Token</label>
                                        <input class="form-control" type="password" required="" name="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-secondary btn-block" type="submit"> Log In </button>
                                       
                                       
                                    </div>

                                    

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        {{-- <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Not you? return <a href="auth-login.html" class="text-white ml-1"><b>Sign In</b></a></p>
                            </div> 
                        </div> --}}
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        {{-- <footer class="footer footer-alt">
            2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a> 
        </footer> --}}

        <!-- Vendor js -->
        <script src="../assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>
        
    </body>
</html>