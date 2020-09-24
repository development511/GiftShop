<?php
include 'admin/include/connection.php';
include 'admin/include/config.php';

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from weblizar.com/demo/html/Ecoast/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:57 GMT -->
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
                        <h2 class="banner-title">Shop</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
    <!---Start-Shop-section-->
    <section class="ws-section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-filter">
                         <ul class="nav nav-tabs title-bottom-spacing">
                            <a href="#"></a>
                            
                            <li><a data-toggle="tab" href="#grid" class="active"><i class="flaticon-grid"></i></a></li>
                            <li><a data-toggle="tab" href="#list"><i class="flaticon-list-1"></i></a></li><br>
                        </ul> 
                        <div class="tab-content">
                            <!--Grid-->
                            <div id="grid" class="tab-pane fade in active">
                                <div class="row justify-content-sm-center">
                                    <!--item-->
                                     <?php
                        $query = "SELECT * FROM portfolio order by id DESC";
                        $result1 = mysqli_query($connect, $query);
                        if (mysqli_num_rows($result1) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result1)) {
                             $cat_name = $row['cat_name'];
        $name = $row['name'];
        $title = $row['title'];
        $price = $row['price'];
        $image = $row['image'];
                     ?>
                                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                            <div class="product-bg">
                                                <a href="product-detail.php?name=<?php echo $name;?>"><img src="images/product/<?php echo $image;?>" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h5><a href="product-detail.php?name=<?php echo $name;?>"><?php echo $name;?></a></h5>
                                                <p><?php echo $title;?></p>
                                                <h4 class="price-text">$<?php echo $price;?></h4>
                                                <div class="p-button">
                                                    <a href="cat.php?cat_name=<?php echo $cat_name;?>">View More</a>
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
                    </div>
                    <!---pagination-->
                    <nav aria-label="Page navigation example" class="navigation-btn">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">....</a></li>
                            <li class="page-item"><a class="page-link" href="#">15</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
    </section>
    <!---End-Shop-section-->
    
    <?php include('includes/footer.php');?>

    <a href="#" id="btn-to-top"><i class="fas fa-arrow-up"></i></a>

    <?php include('includes/footerscript.php');?>
</body>


<!-- Mirrored from weblizar.com/demo/html/Ecoast/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 07:02:57 GMT -->
</html>