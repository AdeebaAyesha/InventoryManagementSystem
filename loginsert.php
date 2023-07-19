<?php  session_start();
$hostName = 'localhost:3307';
$userName = 'root';
$password = '';
$databaseName = 'mydatabase';

$connection = mysqli_connect($hostName,$userName,$password,$databaseName) ;

     $username = $_POST['username'];
    $password = $_POST['password'];

      $query = "INSERT INTO user(username,password) VALUES ('$username','$password')";
   $result = mysqli_query($connection,$query);

   if($result == true)
     header('Location: admintestt.php');
   else
   echo "Error";
?>
