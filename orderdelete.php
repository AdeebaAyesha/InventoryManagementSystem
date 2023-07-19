<?php
include 'dbconnection.php';
$id=$_GET['id'];
$deletequery = "delete from orderinf where id=$id";
$query=mysqli_query($connection,$deletequery);

header('location: orderdisplay.php');
 ?>
