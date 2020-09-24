<?php

// Include the files which is used for this module.
include_once('../include/connection.php');
include_once('../include/config.php');
include_once('../include/session.php');
include_once('../include/flashMessage.php');
include_once('../include/input_validation.php');

// create object for flash message
$msg = new FlashMessages();

$insertSccess = 0;
$insertError = 0;
$updateSccess = 0;
$updateError = 0;
$allowError = 0;
$notUploadedError = 0;
$maxSize = 0;


$query = "SELECT * FROM we_do";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
$rows = mysqli_fetch_assoc($result);
}
if (isset($_POST['submit'])) {
    $date = date("Y-m-d h:i:s");
    if (isset($_POST['check']) && $_POST['check'] != "") {

        $id = $_POST['check'];
        $query = "SELECT * FROM we_do WHERE id = '$id'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            $image = null;
        if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"]))
        {
          $target_dir = "../../images/";
          //$uniq = uniqid();
          $target_file = $target_dir.basename($_FILES["image"]["name"]);
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")      {
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
            $description = input_validate($_POST['description']);
            $queryUpdate = "UPDATE we_do SET description = '$description',image = '$image',dt_updated = '$date' WHERE id = '$id'";
//            print_r($queryUpdate);exit;
            if (mysqli_query($connect, $queryUpdate)) {
                $updateSccess = 1;
            } else {
                $updateError = 1;
            }
      }
      header('location: '.$location.'../we_do.php');
    } else {
        $image = null;
        if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"]))
        {
          $target_dir = "../../images/";
          //$uniq = uniqid();
          $target_file = $target_dir.basename($_FILES["image"]["name"]);
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")      {
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
        $description = input_validate($_POST['description']);
        $queryInsert = "INSERT INTO we_do(description,image,dt_created) VALUES('$description','$image','$date')";
//        print_r($queryInsert);exit;
        if (mysqli_query($connect, $queryInsert)) {

            $insertSccess = 1;



        } else {
            $insertError = 1;
        }

    }
    header('location: '.$location.'../we_do.php');
}


?>
