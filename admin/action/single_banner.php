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


$query = "SELECT * FROM single_banner";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
$rows = mysqli_fetch_assoc($result);
}
if (isset($_POST['submit'])) {
    $date = date("Y-m-d h:i:s");
    if (isset($_POST['check']) && $_POST['check'] != "") {

        $id = $_POST['check'];
        $query = "SELECT * FROM single_banner WHERE id = '$id'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {

            $description = input_validate($_POST['description']);
            $queryUpdate = "UPDATE single_banner SET description = '$description',dt_updated = '$date' WHERE id = '$id'";
//            print_r($queryUpdate);exit;
            if (mysqli_query($connect, $queryUpdate)) {
                $updateSccess = 1;
            } else {
                $updateError = 1;
            }
      }
      header('location: '.$location.'../single_banner.php');
    } else{
        $description = input_validate($_POST['description']);
        $queryInsert = "INSERT INTO single_banner(description,dt_created) VALUES('$description','$date')";
//        print_r($queryInsert);exit;
        if (mysqli_query($connect, $queryInsert)) {

            $insertSccess = 1;



        } else {
            $insertError = 1;
        }

    }
    header('location: '.$location.'../single_banner.php');
}


?>
