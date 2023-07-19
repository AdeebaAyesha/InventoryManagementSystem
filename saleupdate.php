<!DOCTYPE html>
<html>
  <head>
    <title>Inventory managemnt system</title>
   <link rel="stylesheet" type="text/css" href="admintestt.css">
   <link rel="stylesheet" type="text/css" href="btn.css">
   <link rel="stylesheet" type="text/css" href="styling.css">
  </head>
  <body>



   <div class="col-md-3">

<button><a href="saledisplay.php">Check Data</a></button>
</div>
 <div class="bodyofform">
          <form action="" method="POST">

            <?php
            include 'dbconnection.php';
              $ids=$_GET['id'];
              $showquery="select * from sale where id={$ids}";
              $showdata=mysqli_query($connection,$showquery);
              $arrdata=mysqli_fetch_array($showdata);

              if(isset($_POST['sbt'])){
              $idupdate=$_GET['id'];

              $username = $_POST['cusname'];
              $password = $_POST['code'];
              $cprice = $_POST['date'];
              $sprice = $_POST['sabalance'];
              $unit = $_POST['sunit'];


              //$insertquery="insert into user(Name,ItemCode,Consultantprice,Saleprice,Unit,ProductName) VALUES ('$username','$password','$cprice','$sprice','$unit','$item')";

              $updatequery = "update sale set id=$idupdate,Customer='$username',PurchaseGoods='$password',Date_u='$cprice',Balance='$sprice',Unit='$unit' where id=$idupdate";
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
              <label for="">Customer Name:<br></label>
              <input type="text" name="cusname" placeholder="Enter name" value="<?php echo $arrdata['Customer'];?>"required><br>
            </div>
            <div class="context">
              <label for="">Purchase Goods:<br></label>
              <input type="text" name="code" placeholder="Enter Code" value="<?php echo $arrdata['PurchaseGoods'];?>"required><br>
            </div>
            <div class="context">
           <label for="">Date:<br></label>
              <input type="text" name="date" placeholder="enter price" value="<?php echo $arrdata['Date_u'];?>"required><br>
            </div>
            <div class="context">
           <label for="">balance:<br></label>
              <input type="number" name="sabalance" placeholder="enter sale price" value="<?php echo $arrdata['Balance'];?>"required><br>
            </div>
            <div class="context">
              <label for="">Unit:<br></label>
              <input type="number" name="sunit"  placeholder="enter unit" value="<?php echo $arrdata['Unit'];?>"required><br>
            </div>

            <div>
            <input class="btn" name="sbt" type="submit" value="UPDATE">


         </div>

          </form>
        </div>
        <script>
        function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
        </script>
  </body>
</html>
