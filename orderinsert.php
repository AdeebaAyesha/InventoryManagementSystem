<?php
include 'dbconnection.php';

  if(isset($_POST['sbt'])){
    $username = $_POST['cname'];
    $oaddress = $_POST['address'];
    $ocityname = $_POST['city'];
    $orderdate = $_POST['datemention'];
    $ocode = $_POST['pcode'];
    $ounit = $_POST['unit'];

    $queryinsertion = "INSERT INTO orderinf (Name,Address,City,Orderdate,Code,Unit) VALUES ('$username','$oaddress','$ocityname','$orderdate','$ocode','$ounit')";
    $res = mysqli_query($connection,$queryinsertion);

      if($res=true){
       echo "<p style='font-size:30px;padding:15.1rem;padding-left:18rem;background-color:#f2f2f2';>Inserted Form Data<br>Your input was received<br>The server has processed your input and returned <strong>Check Form</strong>.";
}
      else{
      echo "<p style='font-size:30px;padding:15.1rem;padding-left:18rem;background-color:#f2f2f2';>Something Going Wrong<br><strong><a style='color:red';>Found Error<strong>";
}
}
   ?>
