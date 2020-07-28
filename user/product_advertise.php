<!--CODING BY AKASH KUMAR BASAK-->
<?php
//require("server_database_connect.php");
$server_connect = mysqli_connect("localhost", "root", "", "onlineshop");
//$database_connect = mysqli_select_db("onlineshop");
$id = $_GET['id'];
$all_data_sql_query = "SELECT * FROM products WHERE id='$id' ";
$query_result = mysqli_query($server_connect, $all_data_sql_query);
$row = mysqli_fetch_assoc($query_result);
?>
<HTML DOCUMENT PUBLIC>
<html>
<head>
<title>onlineshop</title>
</head>

<body>
<div class="product">

<?php echo "<img class='photo' src='".$row['image']."'>"; ?> <br>
<?php echo $row['name']; $ad = $row;?> <br>
<?php echo $row['price']; ?> <br>
Available(10)<br>
<h1>Buy noy</h1>
</div>
<div class="details">
<h2>Spacification:</h2>
<?php echo $row['specification'];?>

</div>

</body>
</html>