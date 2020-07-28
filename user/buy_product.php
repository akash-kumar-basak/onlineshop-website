<!--CODING BY AKASH KUMAR BASAK-->
<?php
$id = $_GET['id'];
$server_connect = mysqli_connect("localhost", "root", "", "onlineshop");
$all_data_sql_query = "SELECT * FROM products WHERE id='$id' ";
$query_result = mysqli_query($server_connect, $all_data_sql_query);
$row = mysqli_fetch_assoc($query_result);
?>
<?php
$product_id = $row['id'];
$image = $row['image'];
$name = $row['name'];
$price = $row['price'];
$product_delivery = false;




if(isset($_POST['confirmorder'])){
	$insert_query = "INSERT INTO customer_order (product_id, product_name, product_price, product_image, customer_name, customer_address, customer_contact, customer_email, product_delivery) VALUES ('$product_id ', '$name', '$price', '$image', '$_POST[customer_name]', '$_POST[address]', '$_POST[contact]', '$_POST[email]', '$product_delivery')";
	mysqli_query($server_connect, $insert_query);
	$customer_contact = $_POST['contact'];
	header("location:customer_invoice.php?contact=$customer_contact");
}

?>


<HTML DOCUMENT PUBLIC>
<html>
<head>
<title>onlineshop</title>
<style>
body {
	background-color:#FFF;
}
.header {
	background-color:#666;
	width:70%;
	margin-left:15%;
	margin-right:15%;
	height:15%;
	text-align:center
}
.dialogue {
	color:#F90;
}
.footer {
	background-color:#F0F0F0;
	width:70%;
	margin-left:15%;
	margin-right:15%;
	text-align:center;
	height:10%;
	float:left;
	margin-top:2px;
	color:#999;
}
<!--all contens CSS code-->
div.d1 { background-color:#9CC; width:100%; height:100%; font:Verdana, Geneva, sans-serif;}
td.td1,.td2,.td3 { background-color:#F0F0F0; color:#333;}
.link { text-decoration:none;
display:block;
padding:5px 5px 5px 15px;
color:#333;}
.link:hover { background-color:#B0FFFF;}
.link:active { color:#F90;}
.photo {
	width:90%;
	height:40%;
}
.product {
	width:33.2%;
	height:25%;
	float:left;
}
.ad {
	background-color:#999;
	color:#3FC;
}
</style>
</head>

<body>
<table class="header"><tr><td><img src="../asset/onlineshoplogo.png" height="25%" width="75%">
<p class="dialogue">Guarrentty for Secured and Trusted Shopping</p>
</td></tr></table>
<div class="navigation">
<table align="center" width="70.35%" height="5px">
<tr>
<td class="td1" align="center" width="20%"><a class="link" href="index.php">Home</a></td>
<td class="td2" align="center" width="60%">
<form action="search.php" method="post">
<input type="search" name="itemsearch">
<input type="submit" value="search products">
</form>
</td>
<td class="td3" align="center" width="20%"><a class="link" href="help.php">Support center</a></td>
</tr>
</table>
</div>
<div class="content">
<table align="center" width="70.35%"> 
<tr>







<!-- Left side content -->
<td valign="top" class="td1" align="center" width="30%" height="60%">
<h3>Your Product details</h3>
<table>
<tr align="center"><td>Product id: <?php echo $row['id'];?></td></tr>
<tr align="center"><td><img src="<?php echo $row['image'] ?>" width="100px" height="100px"></td></tr>
<tr align="center"><td>Name: <?php echo $row['name'];?></td></tr>
<tr align="center"><td>Price: <?php echo $row['price'];?></td></tr>
</table>

</td>

<!--Main Contens-->
<td valign="top" class="td2" align="center" width="70%" height="60%">

<h3>Order Product</h3>
<table>
<form method="post">
<tr><th align="left">Customer Name:</th><td><input type="text" name="customer_name" /></td></tr>
<tr><th align="left">Address:</th><td><input type="text" name="address" /></td></tr>
<tr><th align="left">Contact Number:</th><td><input type="text" name="contact" /></td></tr>
<tr><th align="left">Email:</th><td><input type="text" name="email" /></td></tr>
<tr align="right"><td></td><td><input type="submit" name="confirmorder" value="Confirm Order" /></td></tr>
</form>
</table>

</td>

</tr>
</table>

<table class="footer">
<tr>
<td>
<h3>DEVELOPED BY AKASH KUMAR BASAK<br>
akash4116@gmail.com<br>
01937053338</h3>
</td>
</tr>
</table>
</div>
</body>
</html>