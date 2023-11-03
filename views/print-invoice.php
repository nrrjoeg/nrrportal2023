<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<div class="presentation-container">

         <?php while($row = mysqli_fetch_array($search_result)):?>
        

    <div class = "presentation-container-title">
        Payment Information
    </div>

          <table>
            <tr><td>Order Number</td> <td><b><?php echo $row['OrderNum'];?></b></td></tr>
            <tr><td>Invoice Number</td> <td><b><?php echo $row['InvoiceNum'];?></b></td></tr>
            <tr><td>Payment ID</td> <td><b><?php echo $row['PaymentID'];?></b></td></tr>
            <tr><td>Applied Amount</td> <td><b><?php echo $row['AmountApplied'];?></b></td></tr>
            <tr><td>Payment Type</td> <td><b><?php echo ucwords($row['PaymentType']);?></b></td></tr>
            <tr><td>Payment Status</td> <td><b><?php echo ucwords($row['PaymentStatus']);?></b></td></tr>
          </table>  
 </div>

         <?php endwhile;?>