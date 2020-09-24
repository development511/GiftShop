<?php
include 'include/connection.php';
include 'include/config.php';
$query = "SELECT * FROM banner";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
$rows = mysqli_fetch_assoc($result);
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
                            <h4 class="page-title">Add/Update About us</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>

                                <li>
                                    Add/Update About us
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12 p-l-0 p-r-0">


                    </div>
                </div>
                <div class="row card-box">
                    <div class="col-md-12">
                        <div id="Show_target_div">
                            <form name="form" id="Form"
                                  method="post" action="action/banner.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12 p-5">
                                        <div class="row_invoice_border">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Tag Line</label>
                                                            <div class="right controls">
                                                                <i class=""></i>
                                                                <textarea  class=" summernote"
                                                                name="description" placeholder="Enter Description"><?php if (isset($rows['description']) && !empty($rows['description'])) {echo $rows['description']; } ?></textarea>
                                                                <input type="hidden" name="check"
                                                                value="<?php if (isset($rows['id']) && !empty($rows['id'])) {echo $rows['id']; } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Choose image</label>
                                                            <div class="right controls">
                                                                <i class=""></i>
                                                                <input type="file" id="image" name="image"
                                                                       onchange="loadFile(event)"
                                                                       class="text-center center-block well well-sm" >
                                                            </div>
                                                                <div class="col-md-3"> 
                                                                    <img id="output" style="height:80px;"/>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="pull-left m-t-70">
                                                    <center>
                                                        <button type="submit" name="submit" id="submit"
                                                                class="btn btn-primary waves-effect waves-light">
                                                            <?php if (isset($rows['id']) && !empty($rows['id'])) {
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
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Update date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Get Inquiry details
                                            $query = "SELECT * FROM banner ORDER BY id DESC";
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
                                                        if(isset($row['description']) && !empty($row['description']))
                                                        {
                                                            echo $row['description']; 
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <img src="../images<?php if (isset($row['image']) && !empty($row['image'])) { echo $row['image'];} ?>" height="70" width="70">
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
                                                        <a href="banner.php?hId=<?php if (isset($row['id']) &&
                                                        !empty($row['id'])) {echo $row['id'];} ?>" title="Edit">
                                                        <i class="fa fa-edit" style="font-size: 20px;"></i>
                                                        </a>
                                                        <a href="banner.php?dId=<?php if(isset($row['id']) && !empty($row['id'])){ echo $row['id']; }?>" onClick="return confirm('Are you sure you want to delete this record');" title="Delete">
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
    </div>

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

    });

    $('#Form').validate({


        rules: {
            description: {required: true},
        },
        messages: {
            description: {required: "Please enter description"},
        },
        error: function (label) {
            $(this).addClass("error");
        },


    });

</script>
<script>
var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
};
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
