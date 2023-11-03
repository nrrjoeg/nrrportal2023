<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<div class="presentation-container">

         <?php while($row = mysqli_fetch_array($search_result)):?>
         
        <?php
            $googleaddress = $row['Address1'];
            $googlecity = $row['City'];
            $googlestate = $row['State'];
         ?>

    <div class = "presentation-container-title">
        Order Basics
    </div>

          <table>
          <tr>
            
            <td>Bill To Customer Number</td>

            <td> <a href=
       
            "<?php echo $viewsdir.'/customer-details-view.php'; ?>?CustomerNumber=<?php echo $row['CustomerNum'];?>&accountnumbersearch="><b><?php echo $row['CustomerNum'];?></b></a>

            </td>
         </tr>

            <tr><td>Order Number</td> <td><b><?php echo $row['OrderNum'];?></b></td></tr>
            <tr><td>Order Date</td> <td><b><?php echo $row['OrderDate'];?></b></td></tr>
            <tr><td>Store</td> <td><?php echo $row['Store'];?></td></tr>
            <tr><td>OrderTotal</td> <td><b><?php echo $row['OrderTotal'];?></b></td></tr>
            <tr><td>First Name</td> <td><?php echo $row['FirstName'];?></td></tr>
            <tr><td>Last Name</td> <td><?php echo $row['LastName'];?></td></tr>
            <tr><td>Account Name</td> <td><?php echo $row['AccountName'];?></td></tr>
            <tr><td>Sales Person</td> <td><?php echo $row['SalesPerson'];?></td></tr>
          </table>  
 </div>

 <div class="presentation-container">

    <div class = "presentation-container-title">
        Shipping Information
    </div>

          <table>
            <tr><td>Receiver Name</td> <td><b><?php echo $row['Name'];?></b></td></tr>
            <tr><td>Attention</td> <td><b><?php echo $row['Attention'];?></b></td></tr>
            <tr><td>Address1</td> <td><a href="http://maps.google.com?q=<?php echo $googleaddress;?>+<?php echo $googlecity;?>+<?php echo $googlestate;?>"><?php echo $googleaddress;?></td></tr>
            <tr><td>Address 2</td> <td><?php echo $row['Address2'];?></td></tr>
            <tr><td>City</td> <td><?php echo $row['City'];?></td></tr>
            <tr><td>State/Province</td> <td><?php echo $row['State'];?></td></tr>
            <tr><td>Postal Code</td> <td><?php echo $row['PostalCode'];?></td></tr>
            <tr><td>Country</td> <td><?php echo $row['Country'];?></td></tr>
            <tr><td>Telephone Number</td> <td><?php echo $row['TelephoneNumber'];?></td></tr>
            <tr><td>Shipping Charged</td> <td><?php echo $row['ShippingCharge'];?></td></tr>
 
          </table>  
 </div>

         <?php endwhile;?>