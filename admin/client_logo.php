<?php

// Include the files which is used for this module.
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/flashMessage.php');
include_once('include/input_validation.php');
include_once('include/config.php');
// create object for flash message
$msg = new FlashMessages();
 
$insertSccess = 0;
$insertError = 0;
$updateSccess = 0;
$updateError = 0;
$allowError = 0;
$notUploadedError = 0;
$maxSize = 0;

$id = isset($_GET['hId']) ? $_GET['hId'] : null; 

 if(isset($_GET['hId']) && !empty($_GET['hId']))
{
   $id = input_validate($_GET['hId']);
    $query = "SELECT * FROM client_logo WHERE id = '$id'";
    $result = mysqli_query($connect, $query);

    // Default set profile image
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    // print_r($row);exit;
    }
 }
?>

<!DOCTYPE html>
<html>
<?php include_once('include/headerscript.php'); ?>
<body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include_once('include/topbar.php'); ?>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once('include/sidebar.php'); ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->

                <div class="content">
                    <div class="container">
                        <div class="row">
                           
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Add/Update Client Logo </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        
                                        <li>
                                            Add/Update Client Logo 
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-md-12 p-l-0 p-r-0">
                            <?php
                            // Display the flash message.
                            if($insertSccess == 1)   
                            {
                                $msg->success("Data inserted successfully");
                                $msg->display();
                            }
                            else if($insertError == 1)
                            {
                                $msg->error("Data not inserted successfully due to error");
                                $msg->display();
                            }
                            else if($updateSccess == 1)
                            {
                                $msg->success("Data updated successfully");
                                $msg->display();
                            }
                            else if($updateError == 1)
                            {
                                $msg->error("Data not updated successfully due to error");
                                $msg->display();
                            }
                            else if($allowError == 1)
                            {
                              $msg->error("Sorry, Only jpg,png and jpeg file is allowed.");
                                $msg->display();
                            }
                            else if($notUploadedError == 1)
                            {
                              $msg->error("Sorry, File is uploaded successfully. Please try again...");
                                $msg->display();
                            }
                            else if($maxSize == 1)
                            {
                              $msg->error("Please upload less then 2mb file...");
                              $msg->display();
                            }
                            ?>
                            </div>
                        </div>
              <div class="row card-box">
                <div class="col-md-12">
                  <div  id="Show_target_div">
                    <form  name="homeSliderForm" action="action/client_logo.php"
                                  id="<?php if (isset($row['id']) && !empty($row['id'])) {
                                      echo "editSliderForm";
                                  } else {
                                      echo "homeSliderForm";
                                  } ?>"
                                  method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12 p-5">
                                        <div class="row_invoice_border">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="col-md-3">
                                                            <label class="form-label">Client Logo</label>
                                                            <br>
                                                            <div class="right controls">
                                                                <i class=""></i>
                                                                <input type="file" id="image" name="image"
                                                                       onchange="loadFile(event)"
                                                                       class="text-center center-block well well-sm" >
                                                            </div>
                                                            </div>
                                                                <div class="col-md-3"> 
                                                                    <img id="output" style="height:80px;"/>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <div class="pull-left m-t-70">
                                                            <center>
                                                                <button type="submit" name="submit" id="submit"
                                                                        class="btn btn-primary waves-effect waves-light">
                                                                    <?php if (isset($row['id']) && !empty($row['id'])) {
                                                                        echo "Update";
                                                                    } else {
                                                                        echo "Submit";
                                                                    } ?>
                                                                </button>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                           </div>
                        </div>
                        </div>
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
            <?php require_once('view_client.php'); ?>
            <!-- ============================================================== -->
            <!-- End of the page -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <!-- START Footerscript -->
        <?php require_once('include/footerscript.php'); ?>
         <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();

                    $('#homeSliderForm').validate({
                        rules: {
                            // layerTitle: {required: true},
                            // sliderImage: {required: true},
                            // layerDescription: {required: true}

                        },
                        messages: {
                            // layerTitle: {required: "Please enter title"},
                            // sliderImage: {required: "Please select image"},
                            // layerDescription: {required: "Please enter description"}
                        },
                    });
                $('#editSliderForm').validate({
                    rules: {
                        // layerTitle: {required: true},
                        // layerDescription: {required: true}

                    },
                    messages: {
                        // layerTitle: {required: "Please enter title"},
                        // layerDescription: {required: "Please enter description"}
                    },
                });
                });

         </script>   
<script>
var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
};
</script>

    </body>
</html>
