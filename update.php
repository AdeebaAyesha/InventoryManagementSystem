<!DOCTYPE html>
<html>
  <head>
    <title>Inventory managemnt system</title>
   <link rel="stylesheet" type="text/css" href="admintestt.css">
   <link rel="stylesheet" type="text/css" href="styling.css">
  </head>
  <body>



   <div class="col-md-3">
<button><a href="Display.php">Check Data</a></button>
</div>
       <div class="bodyofform">
          <form action="" method="POST">

            <?php
            include 'dbconnection.php';
              $id=$_GET['id'];
              $showquery="select * from product where id={$id}";
              $showdata=mysqli_query($connection,$showquery);
              $arrdata=mysqli_fetch_array($showdata);
              if(isset($_POST['sbt'])){
              $idupdate=$_GET['id'];

              $username = $_POST['name'];
              $password = $_POST['code'];
              $cprice = $_POST['cprice'];
              $sprice = $_POST['sprice'];
              $unit = $_POST['unit'];


              //$insertquery="insert into user(Name,ItemCode,Consultantprice,Saleprice,Unit,ProductName) VALUES ('$username','$password','$cprice','$sprice','$unit','$item')";

              $updatequery = "update product set id=$idupdate,ProductName='$username',ItemCode='$password',Consultantprice='$cprice',Saleprice='$sprice',Unit='$unit' where id=$idupdate";
             $result = mysqli_query($connection,$updatequery);

          if($result) {
            ?>
            <script>
            alert ("data updated");
            </script>
            <?php
          }else{
            ?>
            <script>
                 alert ("data not updated")
            </script>
            <?php
          }
        }

          ?>



              <div class="context">
              <label for="">Product Name:<br></label>
              <input type="text" name="name" placeholder="Enter name" value="<?php echo $arrdata['ProductName'];?>" required><br>
            </div>
            <div class="context">
              <label for="">Product Code:<br></label>
              <input type="text" name="code" placeholder="Enter Code"value="<?php echo $arrdata['ItemCode'];?>" required><br>
            </div>
            <div class="context">
           <label for="">Consultant Price:<br></label>
              <input type="number" name="cprice" placeholder="enter price" value="<?php echo $arrdata['Saleprice'];?>" required><br>
            </div>
            <div class="context">
           <label for="">Sale Price:<br></label>
              <input type="number" name="sprice" placeholder="enter sale price" value="<?php echo $arrdata['Consultantprice'];?>" required><br>
            </div>
            <div class="context">
              <label for="">Unit:<br></label>
              <input type="number" name="unit"  placeholder="enter unit" value="<?php echo $arrdata['Unit'];?>" required><br>
            </div>

            <div>
            <input class="btn" type="submit" name="sbt" value="UPDATE">

         </div>

          </form>
        </div>
  </body>
</html>
