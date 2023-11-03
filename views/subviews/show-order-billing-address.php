<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<div class="presentation-container">

         <?php while($row = mysqli_fetch_array($search_result)):?>
        

    <div class = "presentation-container-title">
        Billing Address
    </div>

    <table>
            <tr><td>Order Number</td> <td><b><?php echo $row['OrderNum'];?></b></td></tr>
            <tr><td>Customer</td> <td><b><?php echo $row['ToName'];?></b></td></tr>
            <tr><td>Attention</td> <td><b><?php echo $row['AttnName'];?></b></td></tr>
            <tr><td>Address1</td> <td><?php echo $row['Address1'];?></td></tr>
            <tr><td>Address2</td> <td><b><?php echo $row['Address2'];?></b></td></tr>
            <tr><td>City</td> <td><?php echo $row['City'];?></td></tr>
            <tr><td>State</td> <td><b><?php echo $row['State'];?></td></tr>
            <tr><td>Country</td> <td><?php echo $row['Country'];?></td></tr>
            <tr><td>Postal Code</td> <td><?php echo $row['PostalCode'];?></td></tr>
          </table>  
 </div>

         <?php endwhile;?>
