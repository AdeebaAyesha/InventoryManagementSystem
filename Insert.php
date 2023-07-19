<?php
$hostName = 'localhost:3307';
$userName = 'root';
$password = '';
$databaseName = 'mydatabase';

$connection = mysqli_connect($hostName,$userName,$password,$databaseName);

    $username = $_POST['name'];
    $password = $_POST['code'];
    $cprice = $_POST['cprice'];
    $sprice = $_POST['sprice'];
    $unit = $_POST['unit'];


    $query = "INSERT INTO product(ProductName,ItemCode,Consultantprice,Saleprice,Unit) VALUES ('$username','$password','$cprice','$sprice','$unit')";
   $result = mysqli_query($connection,$query);

      if($result == true)
       echo "<p style='font-size:30px;padding:15.1rem;padding-left:18rem;background-color:#f2f2f2';>Inserted Form Data<br>Your input was received<br>The server has processed your input and returned <strong>Check Form</strong>.";
       header("Location: display.php");
      // else
      // echo "<p style='font-size:30px;padding:15.1rem;padding-left:18rem;background-color:#f2f2f2';>Something Going Wrong<br><strong><a style='color:red';>Found Error<strong>";
   ?>
