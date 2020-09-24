<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email=$_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];
    //print_r($_POST);
       $query=mysqli_query($connect,"INSERT INTO contact( name, lname, email, mobile, comment, dt_created) VALUES ('$name','$lname','$email','$mobile','$comment','$date')");

    include 'emailformate_contact.php';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail('info@niktechsolution.com','',$messaage,$headers);
    echo $messaage;exit;
    print_r($_POST);exit;
    header('location: '.$location.'contact-us.php');
    }
?>