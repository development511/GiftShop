<?php
include_once('admin/include/config.php');
include_once('admin/include/connection.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from weblizar.com/demo/html/Ecoast/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:16 GMT -->
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
    
    <!---Start-main-section-->
    <section class="page-slider">
        <div class="hero-banner-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="banner-title">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
    <!---Start-who-we-are-section-->
    <section class="ws-section-spacing who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title">Who We Are?</h2>
                </div>
            </div>
            <div class="row">
                <?php
                        $query = "SELECT * FROM we_do order by id DESC";
                        $result1 = mysqli_query($connect, $query);
                        if (mysqli_num_rows($result1) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result1)) {
                     ?>
                <div class="col-lg-6 col-md-12 col-sm-12">
                     
                    <p class="who-we"><?php
                        echo html_entity_decode($row['description']);
                            ?></p>
                   
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="who-img">
                        <img src="GiftShop/images/<?php echo $row['image'];?>" class="wow fadeInUp" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                    </div>
                </div>
                  <?php
                           $i++;
                           }
                        }
                        ?>
            </div>
        </div>
    </section>
    <!---End-who-we-are-section-->
    <!---Start-Features-section-->
    <section class="ws-section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title">Our Products</h3>
                    <div class="saprater title-bottom-spacing">
                        <ul>
                            <li class="saprater-box"></li>
                            <li class="saprater-box"></li>
                            <li class="saprater-box"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--item-->
            <div class="row">
                <div class="product-slider">
                     <?php
                        $query = "SELECT * FROM portfolio_category order by id DESC";
                        $result1 = mysqli_query($connect, $query);
                        if (mysqli_num_rows($result1) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result1)) {
                     ?>
              <div class="col-md-4">
                   
                    <div class="product-card-bg " class="bg">
                        <div class="product-bg">
                            <a href="cat.php?cat_name=<?php echo $row['cat_name'];?>"><img src="images/product/<?php echo $row['image'];?>" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h5><a href="cat.php?cat_name=<?php echo $row['cat_name'];?>"><?php echo $row['cat_name'];?></a></h5>
                            <p><?php echo $row['title'];?></p>
                            <div class="p-button">
                                <a href="cat.php?cat_name=<?php echo $row['cat_name'];?>">View More</a>
                                <!-- <a href="#" class="active">Buy Now</a> -->
                            </div>
                        </div>
                    </div>
                   
                    </div>
                    <?php
                           $i++;
                           }
                        }
                        ?>
                    <!--item-->
                    <div class="product-card-bg">
                        <div class="product-bg">
                            <a href="#"><img src="images/8.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h5><a href="shop.php">Product Name</a></h5>
                            <p>Product Type Description</p>
                            <h4 class="price-text">$200</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!---End-Features-section-->
    
    <!---Start-Pertner-Section-->
    <section class="ws-section-spacing patner-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="client-Slider">
                      <?php
                        $query = "SELECT * FROM client_logo order by id DESC";
                        $result = mysqli_query($connect, $query);
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                    <div class="client">
                        <img src="GiftShop/images/<?php if (isset($row['image']) && !empty($row['image'])) {echo $row['image']; } ?>" alt="">
                    </div>
                    <?php
                        $i++;
                        }
                        ?>

                </div>
            </div>
        </div>
    </section>
    <!---End-Pertner-Section-->
    <?php include('includes/footer.php');?>

    <a href="#" id="btn-to-top"><i class="fas fa-arrow-up"></i></a>

    <?php include('includes/footerscript.php');?>
</body>


<!-- Mirrored from weblizar.com/demo/html/Ecoast/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:21 GMT -->
</html>