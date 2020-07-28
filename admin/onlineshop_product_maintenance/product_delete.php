<!--CODING BY AKASH KUMAR BASAK-->
<?php
$id = $_GET['id'];
$server_connect = mysqli_connect("localhost", "root", "", "onlineshop");
$read_query = "SELECT * FROM products WHERE id = '$id'";
$delete_query = "DELETE FROM products WHERE id = '$id'";
$query_result = mysqli_query($server_connect, $read_query);
$row = mysqli_fetch_assoc($query_result);

if(isset($_POST['yes'])){
	$delete = mysqli_query($server_connect, $delete_query);
	header("location: all_product_list.php");
}
if(isset($_POST['no'])){
	header("location: all_product_list.php");
}
?>


<HTML DOCUMENT PUBLIC>
<html>
<head>
<title>onlineshop</title>
<style>
th {color:#36C;}
.div3 {background-color:#666;
width:50%;
color:#0FF;}
.yes {color:#F00;}
.no {color:#36F;}
</style>
</head>

<body>
<div align="center"><img src="../../asset/onlineshoplogo.png" width="50%" height="10%"></div>
<h1 align='center'>Delete Product</h1>
<table align="center" width="90%">
<tr align="center" width="90%">
<th>id</th>
<th>catagory</th>
<th>name</th>
<th>specification</th>
<th>price</th>
</tr>
<tr align="center" width="90%">
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['catagory']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['specification']; ?></td>
<td><?php echo $row['price']; ?></td>
</tr>
</table>
<div align="center">
<div class="div3">
<h2 align="center">Are you sure, you want to delete this information parmanently?</h2>
<form method="post">
<input class="yes" type="submit" name="yes" value="YES">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="no" type="submit" name="no" value="NO">
</form>
</div>
</div>

</body>
