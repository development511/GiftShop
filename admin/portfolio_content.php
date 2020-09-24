<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
include_once('include/flashMessage.php');
include_once('include/input_validation.php');

$msg = new FlashMessages();
$queryDeleteSccess = 0;
$queryDeleteError = 0;
$datainsertsuccess =0;

$datainserterror =0;
if(isset($_GET['dId'])){
    $id = $_GET['dId'];
    $query = "DELETE FROM portfolio_content WHERE id = '$id'";
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
    $query = "SELECT * FROM portfolio_content WHERE id = '$id'";
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
        $small_description = $row['small_description'];
        $description = $row['description'];
        $bottom_image = $row['bottom_image'];
    }
}
?>
<!DOCTYPE html>
<html>
<style>
    table.dataTable>tbody>tr.child ul {
    width: 100%;
}
</style>
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
                                    <h4 class="page-title">ADD PORTFOLIO DETAIL </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            View Portfolio detail
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
                                $msg->success("Data deleted successfully..");
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
                                    <form name="form" action="action/portfolio_content.php" id="form" method="post"    enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 p-5">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Product</label>
                                                            <div class="right controls">
                                                                <i class=""></i>
                                                                <select id="category" name="name" class="form-control select2">
                                                                    <option value="">Select Product</option>
                                                                        <?php
                                                                        $query = "SELECT * FROM portfolio ORDER BY id DESC";  
                                                                        $result = mysqli_query($connect,$query);
                                                                        if(mysqli_num_rows($result)>0)
                                                                        {
                                                                            $i = 1;
                                                                            while($row = mysqli_fetch_assoc($result))
                                                                            {?>
                                                                    <option name="name" value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                                                                            <?php
                                                                            $i++;
                                                                            }
                                                                        }
                                                                        ?>
                                                                </select>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="title">Type:</label>
                                                                <input type="text" name="type" id="type" class="form-control" value="<?php if
                                                                        (isset($type) && !empty($type)) {echo $type;} ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                                <label class="form-label" for="available">Availability:</label>
                                                                <select class="form-control select2" name="available">
                                                                    <option>Please Choose</option>
                                                                    <option value="IN STOKE">IN STOKE</option>
                                                                    <option value="NOT IN STOKE">NOT IN STOKE</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label" for="offer_price">Offer Price</label>
                                                                <input type="text" name="offer_price" id="offer_price" class="form-control" value="<?php if
                                                                        (isset($offer_price) && !empty($offer_price)) {echo $offer_price;} ?>">
                                                            </div>
                                                        </div>
                                                         <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label" for="actual_price">Actual Price</label>
                                                                <input type="text" name="actual_price" id="actual_price" class="form-control" value="<?php if
                                                                        (isset($actual_price) && !empty($actual_price)) {echo $actual_price;} ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="size">&nbsp;&nbsp;&nbsp;Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                        <div style="display: inline;width: 15%;"><input type="checkbox" name="size[]" value="XS">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                        <div style="display: inline;width: 15%;"><input type="checkbox" name="size[]" value="S">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                        <div style="display: inline;width: 15%;"><input type="checkbox" name="size[]" value="M">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                        <div style="display: inline;width: 15%;"><input type="checkbox" name="size[]" value="L">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                        <div style="display: inline;width: 15%;"><input type="checkbox" name="size[]" value="XL">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                        <div style="display: inline;width: 15%;"><input type="checkbox" name="size[]" value="XXL">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XXL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                        <div style="display: inline;width: 15%;"><input type="checkbox" name="size[]" value="XXXL">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XXXL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="small_description">Small small_description:</label>
                                                                <textarea class=" summernote" name="small_description" id="small_description" class="form-control" value=""><?php if
                                                                        (isset($small_description) && !empty($small_description)) {echo $small_description;} ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="description">Description:</label>
                                                                <textarea class=" summernote" name="description" id="description" class="form-control" value=""><?php if
                                                                        (isset($description) && !empty($description)) {echo $description;} ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Product Images</label>
                                                            <div class="right controls card-box">
                                                                <i class=""></i>
                                                                <input type="file" id="bottom_image" name="bottom_image[]" class="form-control" multiple>
                                                                 <input type="hidden" name="check" value="<?php if (isset($id) &&!empty($id)) { echo $id; } ?>">
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div align ="center">
                                                            <div class="m-t-70">
                                                                <center>
                                                                    <button type="submit" name="submit" id="submit"class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </center>
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
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Product Name</th>
                                            <th>Type</th>
                                            <th>Offer Price</th>
                                            <th>Actual Price</th>
                                            <th>availabel</th>
                                            <th>Size</th>
                                            <th>Small Description</th>
                                            <th>Description</th>
                                            <th>Product Image</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $query = "SELECT * FROM portfolio_content ORDER BY id DESC";  
                                        $result = mysqli_query($connect,$query);
                                        if(mysqli_num_rows($result)>0)
                                        {
                                          $i1 = 1;
                                          while($row = mysqli_fetch_assoc($result))
                                          {
                                        ?>
                                        <tr>
                                            <td><?php echo $i1; ?></td>
                                            <td>
                                                <?php
                                                if(isset($row['name']) && !empty($row['name']))
                                                {
                                                    echo $row['name']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['type']) && !empty($row['type']))
                                                {
                                                    echo $row['type']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['offer_price']) && !empty($row['offer_price']))
                                                {
                                                    echo $row['offer_price']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['actual_price']) && !empty($row['actual_price']))
                                                {
                                                    echo $row['actual_price']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['available']) && !empty($row['available']))
                                                {
                                                    echo $row['available']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['size']) && !empty($row['size']))
                                                {
                                                    echo $row['size']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['small_description']) && !empty($row['small_description']))
                                                {
                                                    echo $row['small_description']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['description']) && !empty($row['description']))
                                                {
                                                    echo $row['description']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php $bottom_image = $row['bottom_image'];
                                                    $peice =explode(", ", $bottom_image);
                                                    foreach ($peice as $i) { 
                                                ?>
                                                <img src="../images/product/<?php echo $i; ?>" height="100" width="100" onerror="this.style.display='none'">
                                                <?php }?>
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
                                                <a href="portfolio_content.php?hId=<?php if (isset($row['id']) &&
                                                        !empty($row['id'])) {echo $row['id'];} ?>" title="Edit">
                                                        <i class="fa fa-edit" style="font-size: 20px;"></i>
                                                        </a>
                                                 <a href="portfolio_content.php?dId=<?php if(isset($row['id']) && !empty($row['id'])){ echo $row['id']; }?>" onClick="return confirm('Are you sure you want to delete this record');" title="Delete">
                                                            <i class="fa fa-trash" style="font-size: 20px;"></i>
                                                        </a>
                                            </td>
                                        </tr>
                                        <?php
                                            $i1++;
                                            } 
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            <!-- ============================================================== -->
            <!-- End of the page -->
            <!-- ============================================================== -->
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
        <!-- END wrapper -->
        <!-- START Footerscript -->
        <?php require_once('include/footerscript.php'); ?>

    </body>
</html>