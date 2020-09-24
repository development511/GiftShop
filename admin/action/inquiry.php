<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
    $name = $_POST['name'];
    $email=$_POST['email'];
    $mobile = $_POST['mobile'];
    $product = $_POST['product'];
    $comment = $_POST['comment'];
       $query=mysqli_query($connect,"INSERT INTO inquiry( name, email, mobile,product, comment, dt_created) VALUES ('$name','$email','$mobile','$product','$comment','$date')");

    include 'emailformate_inquiry.php';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail('info@niktechsolution.com','',$messaage,$headers);
    echo $messaage;exit;
    print_r($_POST);exit;
    header('location: '.$location.'inquiry.php');
    }
?>