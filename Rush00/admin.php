<?php
$con = mysqli_connect('mysql', 'rush00', 'passwd', "database");
$sql = "SELECT `name`, `user` FROM `admin`";
$result = mysqli_query($con, $sql);
if (!$result)
    echo "does not work";
if (mysqli_num_rows($result) > 0){
    echo '<h1>orders:</h1>';
    while($row = mysqli_fetch_assoc($result)){
        echo '<p>'.$row['name'].' '.$row['user'].'</p>';
        // echo '<p>'.$row['user'].'</p>';
    }
}


?>
<FORM METHOD="post" ACTION="Delete_user_by_admin.php">
<I>User To Delete:</I><BR>
<BR>
<input type="text" NAME="login" value=""/>
<input class="btn" type="submit" name="btn" value="Delete user">
</FORM>
<FORM METHOD="post" ACTION="add_products.php">
<I>Your Delivery</I><BR>
<BR>
<BR>
Product
<br>
<input type="text" NAME="product" value=""/>
<br>
<br>
Price
<br>
<input type="text" NAME="price" value=""/>
<br>
<br>
Catogory
<br>
<input type="text" NAME="cat" value=""/>
<br>
<br>
Image
<br>
<TEXTAREA NAME="img" ROWS="4" COLS="50"></TEXTAREA>
<input class="btn" type="submit" name="btn" value="Orders">
<br>
<br>
</FORM>
<FORM METHOD="post" ACTION="remove_products.php">
<I>Remove Order</I><BR>
<BR>
<BR>
Product
<br>
<input type="text" NAME="product" value=""/>
<input class="btn" type="submit" name="btn" value="Remove">
<br>
<br>
</FORM>

