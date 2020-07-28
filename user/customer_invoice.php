<!--CODING BY AKASH KUMAR BASAK-->

<?php
$contact = $_GET['contact'];
$server_connect = mysqli_connect("localhost", "root", "", "onlineshop");
$all_data_sql_query = "SELECT * FROM customer_order WHERE customer_contact='$contact' ";
$query_result = mysqli_query($server_connect, $all_data_sql_query);
$row = mysqli_fetch_assoc($query_result);
?>

<HTML DOCUMENT PUBLIC>
<html>
<head>
<title>onlineshop</title>

<style>
.invoicesidebar {background-color:#06F;
					height:10%;
 }

</style>

</head>

<body>
<div align="center"><a href="index.php"><img src="../asset/onlineshoplogo.png" width="100%" height="15%"></a></div>
<table width="100%">

<br><br>

<tr><td class="invoicesidebar" width="43%"></td><th align="center">INVOICE</td><td class="invoicesidebar" width="43%"></td></tr>
</table>

<br><br><br>

<table width="100%">
<tr><td align="left">www.onlineshop.com</td><td align="right">Date: <?php echo date("D"." / " ."M"." / "."Y"); ?></td></tr>
<tr><td align="left">contact:017000000</td><td align="right">Customer name: <?php echo $row['customer_name']; ?></td></tr>
<tr><td align="left">email:os@gmail.com</td><td align="right">Address: <?php echo $row['customer_address']; ?></td></tr>
<tr><td align="left"></td><td align="right">Contact: <?php echo $row['customer_contact']; ?></td></tr>
</table>

<br><br><br><br><br>

<table border="1" width="100%">
<tr><th width="3%">iten no</th><th width="50%">product details</th><th width="20%">price</th><th width="20%">total</th></tr>
<tr><td align="center" width="3%">1</td><td align="center" width="50%"><?php echo $row['product_name']; ?></td><td align="center" width="20%"><?php echo $row['product_price']; ?></td><td align="center" width="20%"><?php echo $row['product_price']; ?></td></tr>
</table>

<br>

<table border="1" align="right" width="40%">
<tr><th width="45.5%">delivery charge</th><td align="center" width="54.5%">80 BDT</td></tr>
</table>

<br><br><br>
<hr />

<table align="right" width="40%">
<tr><th width="45.5%">TOTAL DUE:</th><td align="center" width="54.5%"><?php echo $row['product_price']+80; ?></td></tr>
</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<table width="70%" align="center">
<tr><th align="left">Deliveryman Sign</th><th align="right">Customer Sign</th></tr>
</table>
</body>
</html>