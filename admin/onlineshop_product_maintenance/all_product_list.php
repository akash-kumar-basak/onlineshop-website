<!--CODING BY AKASH KUMAR BASAK-->
<?php
$server_connect = mysqli_connect("localhost", "root", "", "onlineshop");
$all_data_sql_query = "SELECT * FROM products";
$query_result = mysqli_query($server_connect, $all_data_sql_query);
$row = mysqli_fetch_assoc($query_result);
?>




<HTML DOCUMENT PUBLIC>
<html>
<head>
<title>onlineshop</title>
<style>
.edit {color:#0F0;
background-color:#333;
}
.delete {color:#F00;
background-color:#333;
}
a {text-decoration:none;}
</style>
</head>

<body>
<div align="center"><img src="../../asset/onlineshoplogo.png" width="50%" height="10%"></div>
<h1 align="center">All Products List</h1>

<table align="center" border="1" width="80%">
<tr>
<th>id</th>
<th>catagory</th>
<th>name</th>
<th>specification</th>
<th>price</th>
<th>image</th>
<th class="edit" width="3%">edit</th>
<th class="delete" width="5%">delete</th>
</tr>
<?php while($row = mysqli_fetch_assoc($query_result)){ ?>
<tr align="center">
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['catagory'] ?></td>
<td><?php echo $row['name'] ?></td>
<td><?php echo $row['specification'] ?></td>
<td><?php echo $row['price'] ?></td>
<td><img src="../<?php echo $row['image'] ?>" width="100px" height="100px"></td>
<td width="5%"><a href="product_update.php?id=<?php echo $row['id'] ?>">update</td>
<td width="5%"><a href="product_delete.php?id=<?php echo $row['id'] ?>">delete</td>
</tr>
<?php } ?>
</table>

</body>
</html>
