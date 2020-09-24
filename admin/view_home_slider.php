<?php
if(isset($_GET['dId'])){
    $id = $_GET['dId'];
    $query = "DELETE FROM home_slider WHERE id = '$id'";
    $result = mysqli_query($connect,$query);
    if($result){
        $queryDeleteSccess = 1;
    }
    else{
        $queryDeleteError = 1;
    }
}
?>
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<div class="content-page">
   <!-- Start content -->
   <div class="content">
      <div class="container">
         <div class="row">
            <div class="col-md-12 p-l-0 p-r-0">

            </div>
         </div>
         <div class="row">
            <div class="col-md-12 p-l-0 p-r-0">
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
    <div class="card-box table-responsive">
        <table id="datatable" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Slider Image</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM home_slider order by id DESC";

            $result = mysqli_query($connect, $query);


            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {

                ?>
                <tr>
                    <td>
                        <?php echo $i ?>
                    </td>
                    <td>
                        <img src="../images/banner/<?php if (isset($row['image']) && !empty($row['image'])) { echo $row['image']; } ?>" height="70" width="70">
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
                        <a href="home_slider.php?dId=<?php if (isset($row['id']) && !empty($row['id'])) {
                            echo $row['id'];
                        } ?>" onClick="return confirm('Are you sure you want to delete this record');"
                           title="Delete">
                            <i class="fa fa-trash" style="font-size: 20px;"></i>
                        </a>
                    </td>
                </tr>
                <?php
                $i++;

            }

            ?>
            </tbody>
        </table>
    </div>
</div>
         </div>
      </div>
      <!-- container -->
   </div>
   <!-- content -->
   <!-- ============================================================== -->
   <!-- End of the page -->
   <!-- ============================================================== -->
<!-- END wrapper -->
<!-- START Footerscript -->
