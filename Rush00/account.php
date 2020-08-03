<?php
session_start();
$con = mysqli_connect('mysql', 'rush00', 'passwd', "database");
if (empty($_SESSION['loggued_on_user']))
	header("Location: login.php");
$user = stripslashes($_SESSION['loggued_on_user']);
$user = mysqli_real_escape_string($con, $user);
$sql = "SELECT * FROM users WHERE login='$user'";
$succes = mysqli_query($con, $sql);
$rows = mysqli_num_rows($succes);
if ($rows != 1)
    header("Location: login.php");
$sql = "SELECT `name`, `price`, `url` FROM `$user`";
$result = mysqli_query($con, $sql);
if (!$result)
    echo "does not work";
?>
<html>
	<head>
		<style>
			.bg_image{
				background: url("https://images.pexels.com/photos/3014019/pexels-photo-3014019.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500") no-repeat;
				background-size: cover;
				}
			.title{
				font-size: 80;
				color: white;
				position: fixed;
				right: 38%;
				font-family: Optima, sans-serif;
			}
			.btn{
				width: 20%;
				background: darkgreen;
				border: 2px solid #009688;
				color: white;
				padding: 5px;
				font-size: 18px;
				cursor: pointer;
				margin: 12px 0;
            }
            .grid-container {
                display: grid;
                grid-template-columns: auto;
                grid-gap: 50px;
            }
            .image{
                width: 200px;
            }
		</style>
	</head>
	<body class="bg_image">
        <form action="delete_user.php" method="post">
            <input style="background-color:powderblue" class="btn" type="submit" name="btn" value="Delete me">
        </form>
        <div class="grid-container container">
            <?php
                echo '<h1 class="title">'.$_SESSION['loggued_on_user'].'</h1> ';
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<div class="product">';
                        echo '<img class="image" src="'.$row['url'].'" />';
                        echo '<p>€'.$row['price'].'</p>';
                        $_SESSION['row'] = $row;
                        echo '</div>';
                    }
                } 
            ?>
            <a href="order.php"><button type="button" value="ok">Buy!</button></a>
        </div>
        
	</body>
</html>
