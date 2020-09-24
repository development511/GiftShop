
<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/flashMessage.php');
include_once('include/input_validation.php');
$msg = new FlashMessages();
$queryDeleteSccess = 0;
$queryDeleteError = 0;
if(isset($_GET['dId'])){
    $id = $_GET['dId'];
    $query = "DELETE FROM category WHERE id = '$id'";
      $result = mysqli_query($connect,$query);
    if($result){
        $queryDeleteSccess = 1;
    }
    else{
        $queryDeleteError = 1;
    }
}
?>
<?php
if (isset($_GET['hId']) && !empty($_GET['hId'])) {
    $id = input_validate($_GET['hId']);
    $query = "SELECT * FROM category WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $cat_name = $row['cat_name'];
    }
}
?>

<!DOCTYPE html>
<html>
<?php require_once('include/headerscript.php'); ?>
<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <?php require_once('include/topbar.php'); ?>
        <!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <?php require_once('include/sidebar.php'); ?>
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
                                <h4 class="page-title">ADD 
                                SERVICE CATEGORY</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            View service category
                                        </li>
                                    </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 p-l-0 p-r-0">
                            <?php
                            //Display the flash message.
                            if($queryDeleteSccess == 1)   
                            {
                                $msg->success("Data deleted successfully");
                                $msg->display();
                            }
                            else if($queryDeleteError == 1)
                            {
                                $msg->error("oopss!!!error..");
                                $msg->display();
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row card-box">
                        <div class="col-md-12">
                            <div  id="Show_target_div">
                                <form name="form" action="action/category.php"
                                      id="form"
                                      method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="cat_name">Service Category name:</label>
                                                    <input type="text" name="cat_name" id="cat_name" class="form-control" value="<?php if
                                                            (isset($cat_name) && !empty($cat_name)) {echo $cat_name;} ?>">
                                                    <input type="hidden" name="check" value="<?php if (isset($id) &&!empty($id)) { echo $id; } ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <div class="pull-left m-t-70">
                                                        <center>
                                                            <button type="submit" name="submit" id="submit" class="btn btn-primary waves-effect waves-light">
                                                               <?php if (isset($id) && !empty($id)) {
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
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row card-box">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>cat_name</th>
                                            <th>Date</th>
                                            <th>Update date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Get Inquiry details
                                            $query = "SELECT * FROM category ORDER BY id DESC";
                                            $result = mysqli_query($connect,$query);
                                            if(mysqli_num_rows($result)>0)
                                            {
                                                $i = 1;
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td>
                                                        <?php
                                                        if(isset($row['cat_name']) && !empty($row['cat_name']))
                                                        {
                                                            echo $row['cat_name']; 
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if(isset($row['dt_created']) && !empty($row['dt_created']))
                                                        {
                                                            echo $row['dt_created'];
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if(isset($row['dt_updated']) && !empty($row['dt_updated']))
                                                        {
                                                            echo $row['dt_updated'];
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a href="category.php?hId=<?php if (isset($row['id']) &&
                                                        !empty($row['id'])) {echo $row['id'];} ?>" title="Edit">
                                                        <i class="fa fa-edit" style="font-size: 20px;"></i>
                                                        </a>
                                                        <a href="category.php?dId=<?php if(isset($row['id']) && !empty($row['id'])){ echo $row['id']; }?>" onClick="return confirm('Are you sure you want to delete this record');" title="Delete">
                                                            <i class="fa fa-trash" style="font-size: 20px;"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                                    $i++;
                                                    } 
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->
                </div> <!-- content -->
            </div><!-- END wrapper -->
    <!-- ============================================================== -->
    <!-- End of the page -->
    <!-- ============================================================== -->
 
        <!-- START Footerscript -->
        <?php require_once('include/footerscript.php'); ?>

         <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();

         });
            
    $('#form').validate({


            rules: {
                filter: {required: true},
                image: {required: true}
            },
            messages: {
                filter: {required: "Please enter author title"},
                image: {required: "Please select image"}
            },
           

        });

         </script>   
         <!-- Tiny MCE -->
<script type="text/javascript">

  $('form').parsley();
    
    $(function () {
        $('#testimonialForm').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.alert-info').toggleClass('hidden', !ok);
            $('.alert-warning').toggleClass('hidden', ok);
        });
    });
    // Only numeric value allow
    $(".only_numeric").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
 </script>
</body>
</html>