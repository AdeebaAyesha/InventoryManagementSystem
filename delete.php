<?php
include 'dbconnection.php';
$id=$_GET['id'];
$deletequery = "delete from product where id=$id";
$query=mysqli_query($connection,$deletequery);

header('location: display.php');
 ?>
