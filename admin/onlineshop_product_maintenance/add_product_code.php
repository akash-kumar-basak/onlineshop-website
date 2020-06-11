<!--CODING BY AKASH KUMAR BASAK-->

<?php
$image_name = date("D"."M"."Y"."h"."i"."s").$_FILES['image']['name'];
$destination = "../../asset/".$image_name;
$name = $_FILES['image']['tmp_name'];
move_uploaded_file($name, $destination);
$image_destination = "../asset/".$image_name;
$server_connect = mysqli_connect("localhost", "root", "", "onlineshop");
$insert_query = "INSERT INTO products (catagory, name, specification, price, image) VALUES ('$_POST[category]', '$_POST[product_name]', '$_POST[details]', '$_POST[price]', '$image_destination')";
mysqli_query($server_connect, $insert_query);
include "add_product.php";
?>
