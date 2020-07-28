<!--CODING BY AKASH KUMAR BASAK-->
<?php
$id = $_GET['id'];
$server_connect = mysqli_connect("localhost", "root", "", "onlineshop");
$read_query = "SELECT * FROM products WHERE id = '$id'";
$query_result = mysqli_query($server_connect, $read_query);
$row = mysqli_fetch_assoc($query_result);
$refreshAfter = 1;

if(isset($_POST['update'])){
	//image upload
	$image_name = date("D"."M"."Y"."h"."i"."s").$_FILES['images']['name'];
	$destination = "../../asset/".$image_name;
	$name = $_FILES['images']['tmp_name'];
	move_uploaded_file($name, $destination);
	$image_destination = "../asset/".$image_name;
	
	$update_query = "UPDATE products SET catagory='$_POST[catagory]', name='$_POST[name]', specification='$_POST[specification]', price='$_POST[price]', image='$image_destination' WHERE id=$id";
	$update = mysqli_query($server_connect, $update_query);
	header('Refresh: ' . $refreshAfter);
	
}
if(isset($_POST['backtolist'])){
	header("location: all_product_list.php");
}
?>



<HTML DOCUMENT PUBLIC>
<html>
<head>
<title>onlineshop</title>
<style>
th {color:#36C;}
h4 {color:#36C;}
.div3 {background-color:#666;
width:50%;
color:#0FF;}
.update {color:#3C0;}
.backtolist {color:#36F;}
</style>
</head>

<body>
<div align="center"><a href="all_product_list.php"><img src="../../asset/onlineshoplogo.png" width="50%" height="10%"></a></div>
<h1 align='center'>Update Product</h1>
<table align="center" width="90%">
<tr align="center" width="90%">
<th>id</th>
<th>catagory</th>
<th>name</th>
<th>specification</th>
<th>price</th>
<th>image</th>
</tr>
<tr align="center" width="90%">
<form method="post" enctype="multipart/form-data">
<td><?php echo $row['id']; ?></td>
<td><input type="text" name="catagory" value="<?php echo $row['catagory']; ?>"></td>
<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
<td><input type="text" name="specification" value="<?php echo $row['specification']; ?>"></td>
<td><input type="text" name="price" value="<?php echo $row['price']; ?>"></td>
<td><img src="../<?php echo $row['image'] ?>" width="100px" height="100px"></td>
</tr>
</table>
<div align="right">
<h4>upload new image</h4>
<input type="file" name="images">
</div>
<div align="center">
<div class="div3">
<h2 align="center">Are you sure, you want to update this information?</h2>

<input class="update" type="submit" name="update" value="UPDATE">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="backtolist" type="submit" name="backtolist" value="NO, BACK">
</form>
</div>
</div>
</body>
