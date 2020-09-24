<?php
include 'admin/include/connection.php';
include 'admin/include/config.php';
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from weblizar.com/demo/html/Ecoast/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecoast</title>
     <?php include('includes/headerscript.php');?>
</head>

<body>
    <?php include('includes/header.php');?>
    <!-- Preloader -->
    <div id="preloader"></div>
    <!-- Start-Header-Section -->
    <!-- Menu-start-area -->
    
    
    <!---Start-Product-Detail-->
    <section class="ws-section-spacing">
        <div class="container">
            <div class="row">
                <div class="contact-us-bg">
                    <div class="row">
                        <!-- <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="contact-img">
                                <img src="images/con-1.png" class="wow fadeInLeft" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="con">
                            </div>
                        </div> -->
                        <div class="col-lg-9">
                            <!--Contact-Form-->
                            <div class="contact-us-form">
                                <form class="contact-form" action="admin/action/inquiry.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="uname" placeholder="First Name" name="name" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="number" placeholder="Phone Number" name="mobile" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="inquiry" placeholder="Enter The name of Product" name="product" value="<?php if (isset($_GET['name']) && !empty($_GET['name'])) {echo $_GET['name']; }?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Your Comment"></textarea>
                                        </div>
                                        <button type="submit" name="submit" class="contact-btn"><i class="fas fa-paper-plane"></i> Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---End-Product-Detail-->
    
    <?php include('includes/footer.php');?>

    <a href="#" id="btn-to-top"><i class="fas fa-arrow-up"></i></a>

    <?php include('includes/footerscript.php');?>
</body>


<!-- Mirrored from weblizar.com/demo/html/Ecoast/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:30 GMT -->
</html>