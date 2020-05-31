<!--CODING BY AKASH KUMAR BASAK-->

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
<table class="header"><tr><td>
<img src="../asset/onlineshoplogo.png" width="50%" height="25%">
<p class="dialogue">Guarrentty for Secured and Trusted Shopping</p>
</td></tr></table>
<div class="navigation">
<table align="center" width="70.35%" height="5px">
<tr>
<td class="td1" align="center" width="20%"><a class="link" href="index.php">Home</a></td>
<td class="td2" align="center" width="60%"><input type="search"> <input type="button" value="search products"></td>
<td class="td3" align="center" width="20%"><a class="link" href="help.php">Support center</a></td>
</tr>
</table>
</div>
<div class="content">
<table align="center" width="70.35%">
<tr>





<td valign="top" class="td1" align="center" width="20%" height="60%">
<h2>Catagory</h2>
<a class="link" href="electronics.php">Electronis</a> 
<a class="link">Clothe</a>
<a class="link">Jewelery</a>
<a class="link">Gadget</a> 
<a class="link">Watch</a>
</td>

<!--Main Contens-->
<td valign="top" class="td2" align="center" width="60%" height="60%">



<?php
if(isset($page_content) == FALSE)
{
	include "random_product.php";
}
else if($page_content == "details")
{
	include "product_details_content.php";
}
else if($page_content == "electronics")
{
	include "electronics_product.php";
}
else
{
	include "help_content.php";
}
?>

</td>

<td valign="top" class="td3" align="center" width="20%" height="60%"><h3 class="ad">Advertiese 1</h3><h3 class="ad">Advertiese 2</h3><h3 class="ad">Advertiese 3</h3></td>
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