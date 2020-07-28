<!--CODING BY AKASH KUMAR BASAK-->

<?php
	if(isset($_POST['ap']))
	{
		header("location: add_product.php");
	}
	if(isset($_POST['apl']))
	{
		header("location: all_product_list.php");
	}if(isset($_POST['co']))
	{
		header("location: customer_order.php");
	}
?>

<HTML DOCUMENT PUBLIC>
<html>
<head>
<title>onlineshop</title>
<style>
.div1 {background-color:#666;
width:50%;
color:#0FF;}
.btn {color:#3F0;}

</style>
</head>

<body>
<div align="center"><img src="../../asset/onlineshoplogo.png" width="50%" height="10%"></div>

<div align="center">
<div class="div1">
<h2 align="center">Maintain Onlineshop Products</h2>
<form method="post">
<p><input class="btn" type="submit" name="ap" value="Add Products"></p>
<p><input class="btn" type="submit" name="apl" value="All Product List"></p>
<p><input class="btn" type="submit" name="co" value="Customer Order"></p>
</form>
</div>
</div>

</body>
</html>
