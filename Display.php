<!DOCTYPE html>
<html>
   <head>
  <?php include 'links.php';?>
   <link rel="stylesheet" type="text/css" href="display.css">
   </head>
  <body>
    <div class="main-div">
         <h1>List Of Products</h1>
      <div class="center-div">
      <div class="table-responsive">
        <table>
          <thead>
          <tr>
            <th>Sr</th>
              <th>Product Name</th>
                <th>Item Code</th>
                  <th>Consultant price</th>
                    <th>Sale Price</th>
                      <th>Unit</th>

                      <th colspan="2">Operation</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include'dbConnection.php';

             $selectquery="SELECT *FROM product ";
             $query = mysqli_query($connection,$selectquery);
             $nums_u = mysqli_num_rows($query);
            while ($res = mysqli_fetch_array($query)) {
            ?>

              <tr>
                <td><?php echo $res['id'];?></td>
                <td><?php echo $res['ProductName'];?></td>
                <td><?php echo $res['ItemCode'];?></td>
                <td><?php echo $res['Consultantprice'];?></td>
                  <td><?php echo $res['Saleprice'];?></td>
                  <td><?php echo $res['Unit'];?></td>



                <td><a href="update.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" title="UPDATE"><i class="fa fa-edit" class="open-button" onclick="openForm()" aria-hidden="true"></i></a></td>
                <td><a href="delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" title="UPDATE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

              </tr>
        <?php
            }
           ?>

        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
});
</script>
  </body>
</html>
