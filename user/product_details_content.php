<!--CODING BY AKASH KUMAR BASAK-->
<?php
//require("server_database_connect.php");
$server_connect = mysqli_connect("localhost", "root", "", "onlineshop");
//$database_connect = mysqli_select_db("onlineshop");
$name = $_GET['name'];
$all_data_sql_query = "SELECT * FROM products WHERE name='$name' ";
$query_result = mysqli_query($server_connect, $all_data_sql_query);
$row = mysqli_fetch_assoc($query_result);
?>
<HTML DOCUMENT PUBLIC>
<html>
<head>
<title>onlineshop</title>
<style>
.product {
	width:80%;
	height:100%;
	float:left;
}
.buynow {
	background-color:#FF4F4F;
	color:#FFF;
	width:30%;
	padding-top:0.5%;
	padding-bottom:0.5%;
	font-family:"Spy Agency Halftone Italic"
}

</style>
</head>

<body>
<table>
<tr>
<td align="center"><?php echo "<img class='photo' src='".$row['image']."'>"; ?></td>
</tr>
<tr>
<td align="center"><?php echo $row['name']; $ad = $row;?></td>
</tr>
<tr>
<td align="center"><?php echo $row['price']; ?></td>
</tr>
<tr>
<td align="center"><div class="buynow"><h2>Buy now</h2></div></td>
</tr>
<tr>
<td align="center"><h2>Spacification:</h2>
<?php echo $row['specification'];?></td>
</tr>
</table>


</body>
</html>