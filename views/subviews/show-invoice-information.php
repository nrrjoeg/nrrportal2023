<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<div class="presentation-container">

         <?php while($row = mysqli_fetch_array($search_result)):?>
        

    <div class = "presentation-container-title">
        Invoice Information
    </div>

          <table>
          <tr><td>Customer Number</td><td><b><?php echo $row['CustomerNum'];?></b></td></tr>
            <tr><td>Order Number</td> <td><b><?php echo $row['OrderNum'];?></b></td></tr>
            <tr><td>Name</td> <td><b><?php echo $row['NameCat'];?></b></td></tr>
            <tr><td>Account Name</td> <td><b><?php echo $row['AccountName'];?></b></td></tr>
            <tr><td>Invoice Number</td> <td><b><?php echo $row['InvoiceNum'];?></b></td></tr>
            <tr><td>Invoice Date</td> <td><?php echo $row['InvoiceDate'];?></td></tr>
            <tr><td>Paid Date</td> <td><b><?php echo $row['PaidDate'];?></b></td></tr>
            <tr><td>Sales Tax</td> <td><b><?php echo $row['SalesTaxTotal'];?></b></td></tr>
            <tr><td>Invoice Total</td> <td><?php echo $row['InvoiceTotal'];?></td></tr>
            <tr><td>Applied Amount</td> <td><b><?php echo $row['AppliedAmount'];?></b></td></tr>
            <tr><td>Amount Due</td> <td><b><?php echo $row['OpenAmount'];?></b></td></tr>
            <tr><td>Invoice Status</td> <td><b><?php echo $row['Status'];?></b></td></tr>
          </table>  
 </div>

         <?php endwhile;?>