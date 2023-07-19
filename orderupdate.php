<!DOCTYPE html>
<html>
  <head>
    <title>Inventory managemnt system</title>
   <link rel="stylesheet" type="text/css" href="admintestt.css">
   <link rel="stylesheet" type="text/css" href="styling.css">
  </head>
  <body>



   </div>
   <div class="col-md-3">
<button><a href="orderdisplay.php">Check Data</a></button>
</div>
       <div class="bodyofform">
          <form action="" method="POST">

            <?php
            include 'dbconnection.php';
              $id=$_GET['id'];
              $showquery="select * from orderinf where id={$id}";
              $showdata=mysqli_query($connection,$showquery);
              $arrdata=mysqli_fetch_array($showdata);

              if(isset($_POST['sbt'])){
              $idupdate=$_GET['id'];

              $username = $_POST['cname'];
              $cprice = $_POST['address'];
              $sprice = $_POST['city'];
              $unit = $_POST['datemention'];
              $password = $_POST['pcode'];
              $item = $_POST['unit'];

              //$insertquery="insert into user(Name,ItemCode,Consultantprice,Saleprice,Unit,ProductName) VALUES ('$username','$password','$cprice','$sprice','$unit','$item')";

              $updatequery = "update orderinf set id=$idupdate,Name='$username',Address='$cprice',City='$sprice',Orderdate='$unit',Code='$password',Unit='$item' where id=$idupdate";
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
                 alert ("data not inserted")
            </script>
            <?php
          }
        }

          ?>



              <div class="context">

                <label for="">Name:<br></label>
                <input type="text" name="cname" placeholder="Enter name" value="<?php echo $arrdata['Name'];?>" required><br>
              </div>
              <div class="context">
                <label for="">Address:<br></label>
                <input type="text" name="address" placeholder="Enter Code" value="<?php echo $arrdata['Address'];?>"required><br>
              </div>
              <div class="context">
              <label for="">city:<br></label>
                <input type="text" name="city" placeholder="enter price" value="<?php echo $arrdata['City'];?>" required><br>
              </div>
              <div class="context">
              <label for="">Orderdate:<br></label>
                <input type="text" name="datemention" placeholder="enter sale price" value="<?php echo $arrdata['Orderdate'];?>" required><br>
              </div>
              <div class="context">
              <label for="">Product Code:<br></label>
                <input type="text" name="pcode" placeholder="enter sale price" value="<?php echo $arrdata['Code'];?>" required><br>
              </div>
              <div class="context">
                <label for="">Unit:<br></label>
                <input type="text" name="unit"  placeholder="enter unit" value="<?php echo $arrdata['Unit'];?>"required><br>
              </div>
              <div >
              <button class="btn" name="sbt"type="sbt">UPDATE
              </button>
              </div>

         </div>

          </form>
        </div>
  </body>
</html>
