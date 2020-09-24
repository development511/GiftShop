<?php
include '../include/constant.php';
include '../include/connection.php';
include '../include/config.php';
include '../include/function.php';
include '../include/input_validation.php';
if (isset($_POST['submit'])) {
        $date = date("Y-m-d h:i:s");
        $image = null;
        if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"]))
        {
          $target_dir = "../../images/";
          $uniq = uniqid();
          $target_file = $target_dir.basename($uniq.$_FILES["image"]["name"]);
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")      {
            echo "<script>alert('Please upload only image file...');</script>";
          }
          else
          { 
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
            {
              $image = $target_file;
            }
            else
            {
              echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
            } 
          }
        }
        $queryInsert = mysqli_query($connect,"INSERT INTO client_logo(image,dt_created) VALUES('$image','$date')");
     header('location: '.$location.'admin/client_logo.php');           
    }
?>