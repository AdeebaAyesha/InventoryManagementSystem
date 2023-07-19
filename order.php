<!DOCTYPE html>
<html>
  <head>
    <title>Inventory managemnt system</title>
   <link rel="stylesheet" type="text/css" href="admintestt.css">
   <link rel="stylesheet" type="text/css" href="styling.css">
  </head>
  <body>

    <div class="sidebar">
    <?php
  include('partial.php')
     ?>
   </div>
   <div class="col-md-3">
<button><a href="orderdisplay.php">Check Data</a></button>
</div>
       <div class="bodyofform">
          <form action="orderinsert.php" method="POST">

            <div class="context">
              <label for="">Name:<br></label>
              <input type="text" name="cname" placeholder="Enter name"  required><br>
            </div>
            <div class="context">
              <label for="">Address:<br></label>
              <input type="text" name="address" placeholder="Enter Code" required><br>
            </div>
            <div class="context">
           <label for="">city:<br></label>
              <input type="text" name="city" placeholder="enter price" required><br>
            </div>
            <div class="context">
           <label for="">Orderdate:<br></label>
              <input type="text" name="datemention" placeholder="enter sale price" required><br>
            </div>
            <div class="context">
           <label for="">Product Code:<br></label>
              <input type="text" name="pcode" placeholder="enter sale price" required><br>
            </div>
            <div class="context">
              <label for="">Unit:<br></label>
              <input type="text" name="unit"  placeholder="enter unit" required><br>
            </div>
            <div >
            <button class="btn" name="sbt"type="sbt">submit
           </button>
         </div>
          </form>
        </div>
  </body>
</html>
