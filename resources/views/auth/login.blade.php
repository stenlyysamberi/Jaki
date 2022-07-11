
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
                                                   
                                @if (session('masuk'))
                                    <div class="alert alert-danger" role="alert">
                                        <i class=" mr-2"></i>  {{ session('masuk') }}
                                    </div>
                                @endif

                                <div class="text-center w-75 m-auto">
                                    <img src="data:image/png;base64,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" height="88" alt="user-image" class="rounded-circle">
                                    <h4 class="text-dark-50 text-center mt-3">Hi ! Selamat Datang </h4>
                                    <p class="text-muted mb-4">Enter your phone to access the admin.</p>
                                </div>


                                <form action="/login" method="POST">
                                        @csrf
                                    <div class="form-group mb-3">
                                        <label for="phone">Phone</label>
                                        <input autofocus  class="form-control mb-1 @error('hp') is-invalid @enderror" type="number" name="hp" value="{{ old('hp') }}" required  placeholder="Phone">
                                        @error('hp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                     </div>

                                    <div class="form-group">
                                        <label for="password">Token</label>
                                        <input type="password" class="form-control" required placeholder="Enter Password" name="password">
                                       
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