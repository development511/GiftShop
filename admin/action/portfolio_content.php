<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM portfolio_content";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM portfolio_content WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $offer_price = $_POST['offer_price'];
            $actual_price = $_POST['actual_price'];
            $available = $_POST['available'];
            $size = $_POST['size'];
            $ch= "";
            foreach ($size as $chk) {
              $ch .= ",".$chk;
            }
            $small_description = $_POST['small_description'];
            $description = $_POST['description'];
            $bottom_image = null;
              $count = count($_FILES["bottom_image"]["name"]);
              $target_dir = "../../images/product/";
              for($i=0;$i<$count;$i++){
              $uniq = uniqid();
              $target_file = $target_dir.basename($uniq.$_FILES["bottom_image"]["name"][$i]);
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
              if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
                echo "<script>alert('Please upload only image file...');</script>";
              }
              else
              { 
                if(move_uploaded_file($_FILES["bottom_image"]["tmp_name"][$i], $target_file)) 
                {
                  $bottom_image .= ", ".$target_file;
                  //echo $bottom_image;
                }
                else
                {
                  echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
                } 
              }
            }
          $queryUpdate = mysqli_query($connect,"UPDATE portfolio_content SET name = '$name',type = '$type',offer_price = '$offer_price',actual_price = '$actual_price',available = '$available',size = '$ch',small_description = '$small_description',description = '$description',bottom_image = '$bottom_image',dt_updated = '$date' WHERE id = '$id'");
          }
          //header('location: '.$location.'admin/portfolio_content.php'); 
        }else{
            $name = $_POST['name'];
            $type = $_POST['type'];
            $offer_price = $_POST['offer_price'];
            $actual_price = $_POST['actual_price'];
            $available = $_POST['available'];
            $size = $_POST['size'];
            $ch= "";
            foreach ($size as $chk) {
              $ch .= ",".$chk;
            }
            $small_description = $_POST['small_description'];
            $description = $_POST['description'];
            $bottom_image = null;
              $count = count($_FILES["bottom_image"]["name"]);
              $target_dir = "../../images/product/";
              for($i=0;$i<$count;$i++){
              $uniq = uniqid();
              $target_file = $target_dir.basename($uniq.$_FILES["bottom_image"]["name"][$i]);
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
              if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
                echo "<script>alert('Please upload only image file...');</script>";
              }
              else
              { 
                if(move_uploaded_file($_FILES["bottom_image"]["tmp_name"][$i], $target_file)) 
                {
                  $bottom_image .= ", ".$target_file;
                  //echo $bottom_image;
                }
                else
                {
                  echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
                } 
              }
            }
          $query=mysqli_query($connect,"INSERT INTO portfolio_content (name,type,offer_price,actual_price,available,size,small_description,description,bottom_image,dt_created) VALUES('$name','$type','$offer_price','$actual_price','$available','$ch','$small_description','$description','$bottom_image','$date')");
        }
    header('location: '.$location.'admin/portfolio_content.php'); 
  } 
?>
