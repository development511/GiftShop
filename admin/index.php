<?php
    include_once('include/session.php');
    include_once('include/connection.php');
?>

<!DOCTYPE html>
<html>
<?php include_once('include/headerscript.php'); ?>
<?php
    $query = "SELECT * FROM inquiry";
    $result1 = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result1);

    $query1 = "SELECT * FROM contact";
    $result2 = mysqli_query($connect, $query1);
    $count2 = mysqli_num_rows($result2);

    $query2 = "SELECT * FROM portfolio";
    $result3 = mysqli_query($connect, $query2);
    $count3 = mysqli_num_rows($result3);

    $query3 = "SELECT * FROM client_logo";
    $result4 = mysqli_query($connect, $query3);
    $count4 = mysqli_num_rows($result4);
?>
<body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include_once('include/topbar.php'); ?>
            <?php include_once('include/config.php'); ?>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once('include/sidebar.php'); ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
          <div class="content-page">
                <!-- Start content -->
             
                        
                        <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Welcome to Ecoast Admin Panel  </h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                     <div class="row">
                            
                           
                           <div class="col-lg-4 col-md-4">
                               <a href="inquiry.php" >
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-layers widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Total Inquiry</p>
                                        <h2><span data-plugin="counterup"><?= $count; ?> </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                       
                                    </div>
                                </div>
                                 </a><!-- end col -->
                            </div>

                           <div class="col-lg-4 col-md-4">
                               <a href="inquiry.php" >
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-layers widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Total Contact</p>
                                        <h2><span data-plugin="counterup"><?= $count2; ?> </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                       
                                    </div>
                                </div>
                                 </a><!-- end col -->
                            </div>

                           <div class="col-lg-4 col-md-4">
                               <a href="inquiry.php" >
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-layers widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Total Product</p>
                                        <h2><span data-plugin="counterup"><?= $count3; ?> </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                       
                                    </div>
                                </div>
                                 </a><!-- end col -->
                            </div>

                           <div class="col-lg-4 col-md-4">
                               <a href="inquiry.php" >
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-layers widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Total Client</p>
                                        <h2><span data-plugin="counterup"><?= $count4; ?> </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                       
                                    </div>
                                </div>
                                 </a><!-- end col -->
                            </div>
                            <div class="col-lg-4 col-md-4">
                              
                            </div><!-- end col -->
                        </div>
                    </div> <!-- container -->
                </div>
        </div> 
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        <!-- START Footerscript -->
        <?php include_once('include/footerscript.php'); ?>

    </body>
</html>