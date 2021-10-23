<?php
session_start();
$con = mysqli_connect('mysql', 'rush00', 'passwd', "database");
if(!$_SESSION || !$_SESSION['loggued_on_user'])
{
    $_SESSION['loggued_on_user']= session_id();
}
$user = mysqli_real_escape_string($con, $_SESSION['loggued_on_user']);
$sql = 'CREATE TABLE IF NOT EXISTS '.$user.'(
    name VARCHAR(30) NOT NULL,
    price FLOAT(10, 2),
    url VARCHAR(100) NOT NULL)';
$retval = mysqli_query($con, $sql);
// if (!$retval)
//     echo "table".$_SESSION['loggued_on_user']."can not be made";
// else
//     echo "success";
    $row = $_SESSION['row'];
    $name =  mysqli_real_escape_string($con, $row['name']);
    $price = mysqli_real_escape_string($con, $row['price']);
    $url = mysqli_real_escape_string($con, $row['url']);
    $sql = "INSERT INTO `$user` (`name`, `price`, `url`) VALUES ('$name', '$price', '$url')";
    $retval = mysqli_query($con, $sql);
    header("location: products.php");
?>