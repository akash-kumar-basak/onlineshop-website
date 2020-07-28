<!--CODING BY AKASH KUMAR BASAK-->

<?php
$server_connect = mysqli_connect("localhost", "root", "", "onlineshop");
$all_data_sql_query = "SELECT * FROM customer_order";
$query_result = mysqli_query($server_connect, $all_data_sql_query);


?>

<HTML DOCUMENT PUBLIC>
<html>
<head>
<title>onlineshop</title>

<style>
.yellow {color:#FF0;
background:#999;}
.green {color:#0F0;
background:#999;}
.id {background:#999;
color:#0FF;}
</style>

</head>

<body>
<div align="center"><img src="../../asset/onlineshoplogo.png" width="50%" height="10%"></div>
<h2 align="center">All Orders</h2>
<table border="1" width="100%">
<tr>
<th width="2%">order id</th>
<th width="2%">product id</th>
<th>product name</th>
<th>cusomer name</th>
<th>customer contact</th>
<th>customer address</th>
<th width="2%">delivery status</th
</tr>
<?php while($row = mysqli_fetch_assoc($query_result)){ ?>
<tr>
<td class="id"><?php echo $row['id']; ?></td>
<td><?php echo $row['product_id']; ?></td>
<td><?php echo $row['product_name']; ?></td>
<td><?php echo $row['customer_name']; ?></td>
<td><?php echo $row['customer_contact']; ?></td>
<td><?php echo $row['customer_address']; ?></td>
<td><?php if($row['product_delivery'] == 0 ){ echo "<p class='yellow'>pending</p>"; } else { echo "<p class='green'>Delivered</p>"; } ?></td>
</tr>
<?php } ?>
</table>
</body>