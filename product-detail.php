<?php
include 'admin/include/connection.php';
include 'admin/include/config.php';
if (isset($_GET['name']) && !empty($_GET['name'])) {
    $id = $_GET['name'];
    $query = "SELECT * FROM portfolio_content WHERE name = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $name = $row['name'];
        $type = $row['type'];
        $offer_price = $row['offer_price'];
        $actual_price = $row['actual_price'];
        $available = $row['available'];
        $size = $row['size'];
        $peice =explode(",", $size);
        $count = count($peice);
        $small_description = $row['small_description'];
        $description = $row['description'];
        $bottom_image = $row['bottom_image'];
        $peice2 =explode(", ", $bottom_image);
        $count2 = count($peice2);
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from weblizar.com/demo/html/Ecoast/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:23 GMT -->
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
    
    <!---Start-main-section-->
    <section class="page-slider">
        <div class="hero-banner-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="banner-title">Product Detail</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-slider-img">
                            <img src="images/product/<?php echo $peice2[0];?>" class="wow fadeInRight" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---End-Main-section-->
    <!---Start-Product-Detail-->
    <section class="ws-section-spacing product-detail-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="row wow fadeInUp" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="product-img-nav-slider">
                                <div class="slider-nav">
                                <?php  for ($i=1; $i < $count2-1; $i++) { ?>

                                    <div class="product-img-nav">
                                        <img src="images/product/<?php echo $peice2[$i];?>" alt="">
                                    </div>
                                     <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="product-img-slider">
                                <div class="slider-for">
                                     <?php  for ($i=1; $i < $count2-1; $i++) { ?>
                                    <div class="p-img">
                                        <img src="images/product/<?php echo $peice2[$i];?>" alt="">
                                    </div>
                                    <?php } ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--product-detail-->
                <div class="col-lg-6 col-md-6">
                    <div class="product-detail">
                        <h5><?php echo $name; ?></h5>
                        <p>Product Type - <?php echo $type; ?></p>
                        <div class="Start">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="product-detail-price">
                            <h3>$<?php echo $offer_price; ?><span>$<?php echo $actual_price; ?></span></h3>
                        </div>
                        <div class="stock">
                            <p>Availability : <span><?php echo $available; ?></span></p>
                        </div>
                        <div class="size">
                            <ul>
                                <?php  for ($i=0; $i < $count-1; $i++) { ?>
                                <li><?php echo $piece[$i];?></li>
                            <?php } ?>
                            </ul>
                        </div>
                        <p class="product-discription"><?php echo html_entity_decode($small_description);?></p>
                        <div class="p-button">
                            <a href="inquiry.php?name=<?php echo $name; ?>">FOR INQUIRY</a>
                            <!-- <a href="#" class="active">Buy Now</a> -->
                        </div>
                        <div class="share-icon">
                            <p>Share :</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#" class="active"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---End-Product-Detail-->
    <section>
        <div class="container">
            <!--review-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="review" id="accordion">
                        <div class="a-buttom">
                            <button id="headingOne" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Description
                            </button>
                            <!-- <button id="headingTwo" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Comment
                            </button>
                            <button id="headingThree" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Reviews
                            </button> -->
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card card-body">
                                <p class="p-discription"><?php echo html_entity_decode($description);?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <br><br>
    <?php include('includes/footer.php');?>

    <a href="#" id="btn-to-top"><i class="fas fa-arrow-up"></i></a>

    <?php include('includes/footerscript.php');?>
</body>


<!-- Mirrored from weblizar.com/demo/html/Ecoast/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:24 GMT -->
</html>