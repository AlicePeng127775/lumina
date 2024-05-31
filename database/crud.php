<?php 
include_once 'db.php';


if(isset($_POST['signup']))
{

    $fn = $connection ->real_escape_string($_POST['fn']);
    $ln = $connection ->real_escape_string($_POST['ln']);
    $password = $connection ->real_escape_string($_POST['password']);
    // $confirmPassword = $connection ->real_escape_string($_POST['confirmPassword']);
    $email = $connection ->real_escape_string($_POST['email']);
    $phone = $connection ->real_escape_string($_POST['phone']);
    $province = $connection ->real_escape_string($_POST['province']);
    $address = $connection ->real_escape_string($_POST['address']);
    $postcode = $connection ->real_escape_string($_POST['postcode']);


$userSQL = $connection->query("INSERT INTO user(fn, ln, password, email, phone, province, address, postcode) VALUES('$fn','$ln','$password','$email','$phone','$province', '$address','$postcode')");

if(!$userSQL)
{
    echo $connection->error;
}
}





/*===== end code for data insert =====*/

if(isset($_GET['edit']))
{
    $userSQL = $$connection->query("SELECT *  FROM user WHERE id=".$_GET['edit']);
    $getROW = $userSQL->fetch_array();

}


if(isset($_POST['save']))
{
    $userSQL = $$connection->query("UPDATE user SET fn='".$_POST['fn']."',ln='".$_POST['ln']."',password='".$_POST['password']."', address='".$_POST['address']."', email='".$_POST['email']."',phone='".$_POST['phone']."',province='".$_POST['province']."',address='".$_POST['address']."',postcode='".$_POST['postcode']."' WHERE id=".$_GET['edit']);
    header("Location: signup.php");
}


?>