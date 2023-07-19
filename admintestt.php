<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Inventory management system</title>
  <link rel="stylesheet" href="admintestt.css">
  </head>
  </div>

  <body>
    <div class="sidebar">
    <?php
  include('partial.php')
     ?>
    </div>
    <div class="main-content">
      <header>
        <h1>
         <label for="">
         <span class="las la-bars"></span>
         </label>
        Wellcome to IMS
      </h1>
      <div class="user-wrapper">
        <img src="image/ims.png" width="40px" height="40px" alt="">
      <div >
        <h4>Adeeba Ayesha</h4>
        <small>Super Admin</small>
        <button style="background-color:#ffbd59";><a href="logout.php" style="float:left;color:black";>Logout</a></button>

      </div>
      </div>
      </header>

      <main>
      <a href="pstyling.php"><div class="cards">
          <h2>Product<br>
          <?php
             include 'dbconnection.php';
             if(!$connection){
               echo "error";
             }
             $query="SELECT SUM(Unit) as 'sumunit' FROM Product";
             $result=mysqli_query($connection,$query);
             $data=mysqli_fetch_array($result);

             echo "" .$data['sumunit'];
           ?>
         </h2>
         <p>More info</p>
        </div>
        </a>
        <a href="Sale.php"><div class="card">
            <h2>Sale<br>
              <?php
                 include 'dbconnection.php';
                 if(!$connection){
                   echo "error";
                 }
                 $query="SELECT SUM(Balance) as 'sumunit' FROM sale";
                 $result=mysqli_query($connection,$query);
                 $data=mysqli_fetch_array($result);

                 echo "" .$data['sumunit'];
               ?>
            </h2>
            <p>More info</p>
            </div>
          </a>
          <a href="order.php"><div class="crds">
              <h2>Order<br>
                <?php
                   include 'dbconnection.php';
                   if(!$connection){
                     echo "error";
                   }
                   $query="SELECT SUM(Unit) as 'sumunit' FROM orderinf";
                   $result=mysqli_query($connection,$query);
                   $data=mysqli_fetch_array($result);

                   echo "" .$data['sumunit'];
                 ?>
              </h2>
              <p>More info</p>
              </div>
          </a>
          <a href="report.php"><div class="crds">
              <h2>Report<br>
              </h2>
              <p>More info</p>
              </div>
            </a>
      </main>


</div>
  </body>
</html>
