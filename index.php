<?php
include 'admin/include/connection.php';
include 'admin/include/config.php';
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from weblizar.com/demo/html/Ecoast/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:01:08 GMT -->
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
    
   <!---Start-main-section-->
    <section class="ws-section-spacing deal-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="deal one-time">
                    <!--item-->
                    <?php
                        $query = "SELECT * FROM home_slider order by id DESC";
                        $result1 = mysqli_query($connect, $query);
                        if (mysqli_num_rows($result1) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result1)) {
                     ?>
                    <div class="deal-Banner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="deal-banner-content">
                                            <p><?php
                        echo html_entity_decode($row['title']);
                            ?></p>
                                            <a href="#" class="slider-btn">Shop Now<i class="fas fa-arrow-right"></i></a>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4 col-md-4">
                                    <div class="deal-img">
                                        <img src="images/banner/<?php echo $row['image']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php
                           $i++;
                           }
                        }
                        ?>  
                </div>
            </div>
        </div>
    </section>

    <!---End-Main-section-->
    <!---End-Main-section-->
    <!---Start-Trending-Product-section-->
    <section class="ws-section-spacing">
        <div class="container">
            <div class="row">
                <!--item-->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-img wow fadeInLeft" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1">
                        <div class="img-content">
                            <i class="flaticon-shipped"></i>
                            <h4>Free Shipping</h4>
                            <p>Order over $500</p>
                        </div>
                    </div>
                </div>
                <!--item-->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-img wow fadeInUp" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1">
                        <div class="img-content">
                            <i class="flaticon-shipped"></i>
                            <h4>Free Shipping</h4>
                            <p>Order over $500</p>
                        </div>
                    </div>
                </div>
                <!--item-->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-img space wow fadeInRight" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1">
                        <div class="img-content">
                            <i class="flaticon-shipped"></i>
                            <h4>Free Shipping</h4>
                            <p>Order over $500</p>
                        </div>
                    </div>
                </div>
            </div>
            <!---Tranding products-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title">Our Products</h3>
                    <div class="saprater bottom-spacing">
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
                <div class="col-md-12">
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
                 </div>
            </div>
            
        </div>
    </section>
    <!---End-Trending-Product-Section-->
    <!---Start-Offer-Banner-Section-->
    <section class="ws-section-spacing banner-bg">
        <div class="container">
            <div class="row">
                  <?php
                        $query = "SELECT * FROM single_banner order by id DESC";
                        $result1 = mysqli_query($connect, $query);
                        if (mysqli_num_rows($result1) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result1)) {
                     ?>
                <div class="col-lg-7 col-md-10 col-sm-12">
                   
                    <div class="banner-content">
                        
                        <p><?php
                        echo html_entity_decode($row['description']);
                            ?>
                        </p>
                        <a class="btn-6" href="#">Shop Now</a>
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
    <!---End-Offer-Banner-Section-->
    <!---Start-NewArrivals-Section-->
    <section class="ws-section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title">Trending Products</h3>
                    <div class="saprater title-bottom-spacing">
                        <ul>
                            <li class="saprater-box"></li>
                            <li class="saprater-box"></li>
                            <li class="saprater-box"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <!--item-->
                <?php
                $query = "SELECT * FROM portfolio WHERE cat_name = 'Trending Products'";
                        $result1 = mysqli_query($connect, $query);
                        if (mysqli_num_rows($result1) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result1)) {
        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-card">
                        <div class="product-bg">
                            <a href="product-detail.php?name=<?php echo $row['name'];?>"><img src="images/product/<?php echo $row['image'];?>" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h5><a href="product-detail.php?name=<?php echo $row['name'];?>"><?php echo $row['name'];?></a></h5>
                            <p><?php echo $row['title'];?></p>
                            <h4 class="price-text">$<?php echo $row['price'];?></h4>
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
              
                <div class="load-more">
                    <a class="btn-6" href="#">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!---End-NewArrivals-Section-->
    <!---Start-Deal-Offer-Section-->
    <section class="ws-section-spacing deal-bg">
        <div class="container">
            <div class="row">
                <div class="deal one-time">
                    <!--item-->
                     <?php
                        $query = "SELECT * FROM banner order by id DESC";
                        $result1 = mysqli_query($connect, $query);
                        if (mysqli_num_rows($result1) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result1)) {
                     ?>
                    <div class="deal-Banner">
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="deal-banner-content">
                                    <p><?php echo html_entity_decode($row['description']);?></p>
                                    <a class="btn-6" href="#">Load More</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-4">
                                <div class="deal-img">
                                    <img src="GiftShop/images/<?php echo $row['image'];?>" alt="">
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
                </div>
            </div>
        </div>
    </section>
    <!---End-Deal-Offer-Section-->
    <!---Start-Deal-Offer-Section-->
    <section class="ws-section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title">Best Selling Products</h3>
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
                $query = "SELECT * FROM portfolio WHERE cat_name = 'Best Selling Products'";
                        $result1 = mysqli_query($connect, $query);
                        if (mysqli_num_rows($result1) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result1)) {
        ?>
                    <div class="product-card-bg">
                        <div class="product-bg">
                            <a href="product-detail.php?name=<?php echo $row['name'];?>"><img src="images/product/<?php echo $row['image'];?>" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h5><a href="product-detail.php?name=<?php echo $row['name'];?>"><?php echo $row['name'];?></a></h5>
                            <p><?php echo $row['title'];?></p>
                            <h4 class="price-text">$<?php echo $row['price'];?></h4>
                            <div class="p-button">
                                <a href="cat.php?cat_name=<?php echo $row['cat_name'];?>">View More</a>
                                <!-- <a href="#" class="active">Buy Now</a> -->
                            </div>
                        </div>
                    </div>
                      <?php
                           $i++;
                           }
                        }
                        ?>
                </div>
                <div class="load-more">
                    <a class="btn-6" href="#">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!---End-Deal-Offer-Section-->
    
    <!---End-Blog-Section-->
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
                    <!--item-->
                </div>
            </div>
        </div>
    </section>
    <!---End-Pertner-Section-->
    <?php include('includes/footer.php');?>

    <a href="#" id="btn-to-top"><i class="fas fa-arrow-up"></i></a>

    <?php include('includes/footerscript.php');?>
</body>


<!-- Mirrored from weblizar.com/demo/php/Ecoast/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:01:46 GMT -->
</html>