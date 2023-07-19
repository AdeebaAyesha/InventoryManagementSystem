<!DOCTYPE html>
<html>
   <head>
  <?php include 'links.php';?>
   <link rel="stylesheet" type="text/css" href="display.css">
   </head>
  <body>
    <div class="main-div">
         <h1>List Of Order Placed</h1>
      <div class="center-div">
      <div class="table-responsive">
        <table>
          <thead>
          <tr>
            <th>id</th>
              <th>Name</th>
                <th>Address</th>
                  <th>City</th>
                    <th>Orderdate</th>
                      <th>Code</th>
                      <th>Units</th>
                      <th>operation</th>
          </tr>
        </thead>
        <tbody>
          <?php include'dbConnection.php';
          $selectquery="SELECT * FROM orderinf ";
          $displayquery = mysqli_query($connection,$selectquery);
          $nums_o = mysqli_num_rows ($displayquery);

         while ($res = mysqli_fetch_assoc($displayquery))  {
            ?>

              <tr>
                <td><?php echo $res['id'];?></td>
                <td><?php echo $res['Name'];?></td>
                <td><?php echo $res['Address'];?></td>
                <td><?php echo $res['City'];?></td>
                <td><?php echo $res['Orderdate'];?></td>
                <td><?php echo $res['Code'];?></td>
                <td><?php echo $res['Unit'];?></td>
                  <td><a href="orderupdate.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td><a href="orderdelete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" title="UPDATE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

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
