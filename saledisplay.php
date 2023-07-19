<!DOCTYPE html>
<html>
   <head>
  <?php include 'links.php';?>
   <link rel="stylesheet" type="text/css" href="display.css">
   </head>
  <body>
    <div class="main-div">
         <h1>List Of Sale</h1>
      <div class="center-div">
      <div class="table-responsive">
        <table>
          <thead>
          <tr>
            <th>id</th>
              <th>Product Name</th>
                <th>Code</th>
                  <th>Date</th>
                    <th>Balance</th>
                      <th>Unit</th>
                      <th>Operation</th>
          </tr>
        </thead>
        <tbody>
          <?php include'dbConnection.php';
             $selectquery="SELECT *FROM sale ";
             $query = mysqli_query($connection,$selectquery);
             $nums = mysqli_num_rows($query);


            while ($res = mysqli_fetch_array($query)) {
            ?>

              <tr>
                <td><?php echo $res['id'];?></td>
                <td><?php echo $res['Customer'];?></td>
                <td><?php echo $res['PurchaseGoods'];?></td>
                <td><?php echo $res['Date_u'];?></td>
                <td><?php echo $res['Balance'];?></td>
                <td><?php echo $res['Unit'];?></td>
                <td ><a href="saleupdate.php?id=<?php echo $res['id'];?>" data-toggle="tooltip"  title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td><a href="saledelete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" title="UPDATE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

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
