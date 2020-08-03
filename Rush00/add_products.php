<?php
$con = mysqli_connect('mysql', 'rush00', 'passwd', "database");
$sql = "INSERT INTO `products` (`name`, `price`, `url`, `category`) VALUES ('$_POST[product]', '$_POST[price]', '$_POST[img]', '$_POST[cat]')";
if (!mysqli_query($con, $sql))
		echo " Order is not placed";
	else
		echo " succesfull order";
?>
