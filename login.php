    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content />
            <meta name="author" content />
            <title>Historia Nirleka</title>
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/logo_historia-removebg-preview.png" />
            <!-- Custom Google font-->
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
            <!-- Bootstrap icons-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="css/styles.css" rel="stylesheet" />
        </head>
        <body class="d-flex flex-column">
            <main class="flex-shrink-0">
                <!-- Navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                    <div class="container px-5">
                        <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Historia Nirleka</span></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                                <li class="nav-item"><a class="nav-link" href="Regis.html">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <section class="py-5">
                    <div class="container px-5">
                        <!-- Contact form-->
                        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                            <div class="text-center mb-5">
                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-linkedin"></i></div>
                                <h1 class="fw-bolder">HN</h1>
                                <p class="lead fw-normal text-muted mb-0">Masuk Ke Akun Anda</p>
                            </div>
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-8 col-xl-6">
                                    <!-- * * * * * * * * * * * * * * *-->
                                    <!-- * * SB Forms Contact Form * *-->
                                    <!-- * * * * * * * * * * * * * * *-->
                                    <!-- This form is pre-integrated with SB Forms.-->
                                    <!-- To make this form functional, sign up at-->
                                    
                                    <!-- to get an API token!-->
                                    <form action="Proses_login.php" method="post">
                                        <!-- Name input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." name="username" required/>
                                            <label for="name">Full name</label>
                                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                        </div>
                                        <!-- Email address input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" type="password" placeholder="Enter your Password"required />
                                            <label for="email">Password</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="kirim" value="Login">
                                        <p> Belum punya akun?
                                <a href="Regis.php">Register di sini</a>
                                     </p>
                                     </div>
                                    </form>
                                    <script src="js/scripts.js"></script>
                                   
                                    
</html>