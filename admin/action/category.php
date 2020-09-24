<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM category";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
//        print_r($row);exit;
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
            $id = $_POST['check'];
        $query = "SELECT * FROM category WHERE id = '$id'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
          $cat_name = input_validate($_POST['cat_name']);
          $queryUpdate = mysqli_query($connect,"UPDATE category SET cat_name = '$cat_name',dt_updated = '$date' WHERE id = '$id'");
          }
          //header('location: '.$location.'admin/category.php'); 
        }else{
          $cat_name = $_POST['cat_name'];
          $query=mysqli_query($connect,"INSERT INTO category (cat_name,dt_created) VALUES('$cat_name','$date')");
        }
    header('location: '.$location.'admin/category.php'); 
  }        
?>
