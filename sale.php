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
<button><a href="saledisplay.php">Check Data</a></button>
</div>
       <div class="bodyofform">
          <form action="saleinsert.php" method="POST">


            <div class="context">
              <label for="">Product Name:<br></label>
              <input type="text" name="cusname" placeholder="Enter name" value=""required><br>
            </div>
            <div class="context">
              <label for="">Code:<br></label>
              <input type="text" name="code" placeholder="Enter Code" value=""required><br>
            </div>
            <div class="context">
           <label for="">Date:<br></label>
              <input type="text" name="date" placeholder="enter price" value=""required><br>
            </div>
            <div class="context">
           <label for="">balance:<br></label>
              <input type="number" name="sabalance" placeholder="enter sale price" value=""required><br>
            </div>
            <div class="context">
              <label for="">Unit:<br></label>
              <input type="number" name="sunit"  placeholder="enter unit" value=""required><br>
            </div>

            <div>
            <button class="btn" name="sbt" type="submit">submit
           </button>
         </div>
          </form>
        </div>
  </body>
</html>
