<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

   <?php while($row = mysqli_fetch_array($search_result)):?>

   <div class="presentation-container">

      <div class="presentation-container-title">
        Postal Address
      </div>

       <table>
            <tr><td>Postal Name</td> <td><b><?php echo $row['ToName'];?></b></td></tr>
            <tr><td>Address 1</td> <td><b><?php echo $row['Address1'];?></b></td></tr>
            <tr><td>Address2</td> <td><b><?php echo $row['Address2'];?></b></td></tr>
            <tr><td>City</td> <td><b><?php echo $row['City'];?></b></td></tr>
            <tr><td>State/Province</td> <td><b><?php echo $row['State'];?></b></td></tr>
            <tr><td>Postal Code</td> <td><?php echo $row['PostalCode'];?></td></tr>
            <tr><td>Country</td> <td><?php echo $row['Country'];?></td></tr>
      </table>
   </div>

<?php endwhile;?>