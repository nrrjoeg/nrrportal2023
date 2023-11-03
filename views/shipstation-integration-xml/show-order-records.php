<?php require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>

<!DOCTYPE html>
<html>
    <body>

    <?php require_once $processdir.'/shipstation-integration-xml/get-customer-section.php'; ?>

    <?php while($row = mysqli_fetch_array($search_result)):?>

    <table>

       <tr><td>OrderID</td><td><?php echo $row['OrderID']; ?></td><td></td></tr>
       <tr><td>OrderNumber</td> <td><?php echo $row['OrderNumber']; ?></td></tr>
       <tr><td>OrderDate</td> <td><?php echo $row['OrderDate']; ?></td></tr>
       <tr><td>OrderStatus</td> <td><?php echo $row['OrderStatus']; ?></td></tr>

       <tr><td>ShippingMethod</td> <td><?php echo $row['ShippingMethod']; ?></td></tr>
       <tr><td>OrderTotal</td> <td><?php echo $row['OrderTotal']; ?></td></tr>
       <tr><td>TaxAmount</td> <td><?php echo $row['TaxAmount']; ?></td></tr>
       <tr><td>ShippingAmount</td> <td><?php echo $row['ShippingAmount']; ?></td></tr>
       <tr><td>CustomerCode</td> <td><?php echo $row['CustomerCode']; ?></td></tr>

       <tr><td>InvoiceNum</td> <td><?php echo $row['InvoiceNum'];?> </td></tr>

       <tr><td>Name</td> <td><?php echo $row['Name']; ?></td></tr>

       <tr><td>Company</td> <td><?php echo $row['Name']; ?></td></tr>

       <tr><td>Phone</td> <td><?php echo $row['Phone']; ?></td></tr>

       <tr><td>EmailAddress</td> <td><?php echo $row['EmailAddress'];?> </td></tr>

       <tr><td>Name</td> <td><?php echo $row['Name']; ?></td></tr>
       <tr><td>Address1</td> <td><?php echo $row['Address1']; ?></td></tr>
       <tr><td>Address2</td> <td><?php echo $row['Address2']; ?></td></tr>
       <tr><td>City</td> <td><?php echo $row['City']; ?></td></tr>

       <tr><td>State</td> <td><?php echo $row['State']; ?></td></tr>
       <tr><td>PostalCode</td> <td><?php echo $row['PostalCode']; ?></td></tr>
       <tr><td>Phone</td> <td><?php echo $row['Phone']; ?></td></tr>

<?php endwhile;?>

<?php $mysqli->close();?>

    </body>
    
</html>
