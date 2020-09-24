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
    $query = "DELETE FROM portfolio WHERE id = '$id'";
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
    $query = "SELECT * FROM portfolio WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $cat_name = $row['cat_name'];
        $name = $row['name'];
        $title = $row['title'];
        $price = $row['price'];
        $image = $row['image'];
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
                                    <form name="form" action="action/portfolio.php" id="form" method="post"    enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 p-5">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Category</label>
                                                            <div class="right controls">
                                                                <i class=""></i>
                                                                <select id="category" name="cat_name" class="form-control select2">
                                                                    <option value="">Select Category</option>
                                                                        <?php
                                                                        $query = "SELECT * FROM portfolio_category ORDER BY id DESC";  
                                                                        $result = mysqli_query($connect,$query);
                                                                        if(mysqli_num_rows($result)>0)
                                                                        {
                                                                            $i = 1;
                                                                            while($row = mysqli_fetch_assoc($result))
                                                                            {?>
                                                                    <option name="cat_name" value="<?php echo $row['cat_name'];?>"><?php echo $row['cat_name'];?></option>
                                                                            <?php
                                                                            $i++;
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <option value="Trending Products">Trending Products</option>
                                                                        <option value="Best Selling Products">Best Selling Products</option>
                                                                </select>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="name">Product name:</label>
                                                                <input type="text" name="name" id="name" class="form-control" value="<?php if
                                                                        (isset($name) && !empty($name)) {echo $name;} ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="title">Title:</label>
                                                                <input type="text" name="title" id="title" class="form-control" value="<?php if
                                                                        (isset($title) && !empty($title)) {echo $title;} ?>">
                                                                <input type="hidden" name="check" value="<?php if (isset($id) &&!empty($id)) { echo $id; } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="price">Price:</label>
                                                                <input type="text" name="price" id="price" class="form-control" value="<?php if
                                                                        (isset($price) && !empty($price)) {echo $price;} ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Image</label>
                                                            <div class="right controls card-box">
                                                                <i class=""></i>
                                                                <input type="file" id="image" name="image" class="form-control">
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
                                    
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>cat_name</th>
                                            <th>image</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $query = "SELECT * FROM portfolio ORDER BY id DESC";  
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
                                                <img src="../images/product/<?php if(isset($row['image']) && !empty($row['image'])){ echo $row['image']; } ?>?" height="100" width="100">
                                            </td>
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
                                                if(isset($row['title']) && !empty($row['title']))
                                                {
                                                    echo $row['title']; 
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
                                                <a href="portfolio.php?hId=<?php if (isset($row['id']) &&
                                                        !empty($row['id'])) {echo $row['id'];} ?>" title="Edit">
                                                        <i class="fa fa-edit" style="font-size: 20px;"></i>
                                                        </a>
                                                 <a href="portfolio.php?dId=<?php if(isset($row['id']) && !empty($row['id'])){ echo $row['id']; }?>" onClick="return confirm('Are you sure you want to delete this record');" title="Delete">
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