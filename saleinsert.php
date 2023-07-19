<?php
$hostName = 'localhost:3307';
$userName = 'root';
$password = '';
$databaseName = 'mydatabase';

$connection = mysqli_connect($hostName,$userName,$password,$databaseName);

    $cuname = $_POST['cusname'];
    $salname = $_POST['code'];
    $sdate = $_POST['date'];
    $sbalance = $_POST['sabalance'];
    $sitems = $_POST['sunit'];

    $query = "INSERT INTO sale(Customer,PurchaseGoods,Date_u,Balance,Unit) VALUES ('$cuname','$salname','$sdate','$sbalance','$sitems')";
   $result = mysqli_query($connection,$query);

      if($result == true)
       echo "<p style='font-size:30px;padding:15.1rem;padding-left:18rem;background-color:#f2f2f2';>Inserted Form Data<br>Your input was received<br>The server has processed your input and returned <strong>Check Form</strong>.";
      else
      echo "<p style='font-size:30px;padding:15.1rem;padding-left:18rem;background-color:#f2f2f2';>Something Going Wrong<br><strong><a style='color:red';>Found Error<strong>";
   ?>
