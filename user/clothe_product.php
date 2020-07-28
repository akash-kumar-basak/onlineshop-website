<!--CODED BY AKASH KUMAR BASAK-->
<?php
$server_connect = mysqli_connect("localhost", "root", "", "onlineshop");
$all_data_sql_query = "SELECT * FROM products WHERE  catagory = 'clothe' ";
$query_result = mysqli_query($server_connect, $all_data_sql_query);
$row = mysqli_fetch_assoc($query_result);
while($row = mysqli_fetch_assoc($query_result)){
?>

<HTML DOCUMENT PUBLIC>
<html>
<head>
<title>onlineshop</title>
</head>

<body>
<div class="product">
<a class="productlink" href="product_details.php?id=<?php echo $row['id']; ?>"><img class="photo" src=" <?php echo $row['image'] ?>"> <br>
<?php echo $row['name'] ?><br>
<?php echo $row['price'] ?></h4>
</a>
</div>
<?php } ?>

</body>
</html>