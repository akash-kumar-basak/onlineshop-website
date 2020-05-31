<!--CODING BY AKASH KUMAR BASAK-->

<HTML DOCUMENT PUBLIC>
<html>
<head>
<title>onlineshop</title>

<style>
.button {
	background-color:#FF5E5E;
	width:50%;
	color:#FFF;
}
.div {
	background-color:#999;
}

</style>
</head>

<body>
<div align="center"><img src="../../asset/onlineshoplogo.png" width="50%" height="10%"></div>
<h1 align="center">Insert a new product</h1>
<form action="add_product_code.php" method="POST" enctype="multipart/form-data">
<table align="center">
<tr>
<th align="left">Catagory</th> <td><input type="text" name="category"></td>
</tr>
<tr>
<th align="left">Product name</th> <td><input type="text" name="product_name"></td>
</tr>
<tr>
<th align="left">Product details</th> <td><input type="text" name="details"></td>
</tr>
<tr>
<th align="left">Product price</th> <td><input type="text" name="price"></td>
</tr>
<tr>
<th align="left">Upload product image</th></td>
</tr>
<tr>
<td><input type="file" name="image"></td>
</tr>
<tr>
<td><input class="button" type="submit" name="Submit" value="submit"></td>
</tr>
</table>
</form>

</body>
</html>