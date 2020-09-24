<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Autorecruit</title>
</head>

<body class="accountpage">
    <div class="container-fluid">
        <div class="row">
            <div class="accountpage--left col-md-7 px-md-0">
                <div class="accountpage--left--container">
                    <div class="accountpage--logo mb-5">
                        <a href=""><img width="200px" data-aos="fade-in" src="assets/images/logo-2.svg" alt="Autorecruit" /></a>
                    </div>

                    <div class="" data-aos="fade-in" data-aos-delay="150">
                        <h2 class="text-secondary mb-4">Log In</h2>
                    </div>

                    <div class="" data-aos="fade-up" data-aos-delay="300">
                        <form action="" method="POST" class="form needs-validation mb-4" novalidate>
                            <div class="form-group">
                                <label for="">EMAIL</label>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Your email" required />
                                <div class="invalid-feedback">Please check this input</div>
                            </div>

                            <div class="form-group">
                                <label for="">PASSWORD</label>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required />
                                <div class="invalid-feedback">Please check this input</div>
                            </div>

                            <p>
                                <button type="submit" class="btn btn-primary btn-lg d-block d-md-inline-block">
                                    SIGN IN
                                </button>
                            </p>

                            <p class="text-notice text-secondary">
                                Don't have an account yet? <a href="">Sign Up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accountpage--right col-md-5 px-md-0">
                <div class="d-flex justify-content-center align-content-center h-100">
                    <img data-aos="fade-left" data-aos-delay="200" class="mw-100" src="assets/images/login-persona.svg" alt="" />
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/core.min.js"></script>
<script src="js/app.min.js"></script>

</html>