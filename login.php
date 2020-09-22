<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from weblizar.com/demo/html/Ecoast/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecoast</title>
   <?php include('includes/headerscript.php');?>
</head>

<body>
    <?php include('includes/header.php');?>
    <div id="preloader"></div>
    <!-- Start-Header-Section -->
    <!-- Menu-start-area -->
    
    <!---Start-main-section-->
    <section class="page-slider">
        <div class="hero-banner-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="banner-title">Login / Register</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-slider-img">
                            <img src="images/about-slider-img.png" class="wow fadeInRight" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---End-Main-section-->
    <!---Start-Login-->
    <section class="ws-section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="resigter-customer">
                        <h4 class="">REGISTERED CUSTOMERS</h4>
                        <div class="login-form">
                            <p>If you have an account, sign in with your email address.</p>
                            <form>
                                <div class="form-group">
                                    <label for="email">Enter Your Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password">Enter Your Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required="">
                                </div>
                                <button type="submit" class="contact-btn forget">SING IN</button>
                                <a href="#" class="forget-password">Forget Password?</a>
                            </form>
                            <div class="login-social-icon">
                                <span>Or Sign In With </span>
                                <ul>
                                    <li class="fb"><i class="fab fa-facebook-f"></i></li>
                                    <li class="gl"><i class="fab fa-google-plus-g"></i></li>
                                    <li class="in"><i class="fab fa-linkedin-in"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--NEW-CUSTOMER-->
                <div class="col-lg-6">
                    <div class="resigter-customer">
                        <h4 class="">NEW CUSTOMER</h4>
                        <div class="login-form">
                            <p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
                            <form>
                                <div class="form-group">
                                    <label for="name">Enter Your Username</label>
                                    <input type="name" name="name" class="form-control" id="name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Enter Your Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password">Enter Your Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password">Enter Confirm Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required="">
                                </div>
                                <button type="submit" class="contact-btn forget">CREATE AN ACCOUNT</button>
                            </form>
                            <div class="login-social-icon">
                                <span>Or Sign up With </span>
                                <ul>
                                    <li class="fb"><i class="fab fa-facebook-f"></i></li>
                                    <li class="gl"><i class="fab fa-google-plus-g"></i></li>
                                    <li class="in"><i class="fab fa-linkedin-in"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---End-Login-->
    <?php include('includes/footer.php');?>

    <a href="#" id="btn-to-top"><i class="fas fa-arrow-up"></i></a>

    <?php include('includes/footerscript.php');?>
</body>



<!-- Mirrored from weblizar.com/demo/html/Ecoast/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:13 GMT -->
</html>