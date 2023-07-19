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
<button><a href="Display.php">Check Data</a></button>
</div>
       <div class="bodyofform">
          <form action="Insert.php" method="POST">


            <div class="context">
              <label for="">Product Name:<br></label>
              <input type="text" name="name" placeholder="Enter name" required><br>
            </div>
            <div class="context">
              <label for="">Item Code:<br></label>
              <input type="text" name="code" placeholder="Enter Code" required><br>
            </div>
            <div class="context">
           <label for="">Consultant Price:<br></label>
              <input type="number" name="cprice" placeholder="enter price" required><br>
            </div>
            <div class="context">
           <label for="">Sale Price:<br></label>
              <input type="number" name="sprice" placeholder="enter sale price" required><br>
            </div>
            <div class="context">
              <label for="">Unit:<br></label>
              <input type="number" name="unit"  placeholder="enter unit" required><br>
            </div>
            <div  >
            <button class="btn" name="sbt" type="submit">submit
           </button>
         </div>
          </form>
        </div>
  </body>
</html>
