<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from weblizar.com/demo/html/Ecoast/check-out.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:21 GMT -->
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
    <section class="page-slider">
        <div class="hero-banner-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="banner-title">Checkout</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
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
    <!---Start-Product-Detail-->
    <section class="ws-section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-bottom-spacing">Billing Detail</h2>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="First Name*" class="form-control" required data-error="Enter Your Name" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="Last Name*" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="Email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="phone" name="Phone" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="Address" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="company name" class="form-control" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" placeholder="Town/City">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="State" class="form-control" placeholder="State/Country">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="Postcode" class="form-control" placeholder="Postcode">
                                </div>
                            </div>
                        </div>
                    </form>
                    <button type="submit" class="btn-submit">Submit Now</button>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="checkout-card">
                        <ul>
                            <li class="chechout-title">Product <span class="chechout-span">Total</span></li>
                            <li>
                                <ul class="chechout-item">
                                    <li><img src="images/check-out.jpg" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">Product Name x 1<span>$250</span></li>
                                    <li><img src="images/check-out.jpg" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">Product Name x 1<span>$250</span></li>
                                </ul>
                            </li>
                            <li>Subtotal<span class="Subtotal">$250</span></li>
                            <li class="chechout-shiping">Shiping<span class="Subtotal">Shpping Free</span></li>
                            <li class="chechout-total">Total<span class="Subtotal">$500</span></li>
                        </ul>
                        <a href="#" class="proceed-to-checkout">Proceed To Payment</a>
                    </div>
                </div>
    </section>
    <!---End-Product-Detail-->
    
    
<?php include('includes/footer.php');?>

    <a href="#" id="btn-to-top"><i class="fas fa-arrow-up"></i></a>

    <?php include('includes/footerscript.php');?>
</body>


<!-- Mirrored from weblizar.com/demo/html/Ecoast/check-out.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:22 GMT -->
</html>