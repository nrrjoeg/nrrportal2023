<?php include $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<!DOCTYPE html>
<html>
    
   <?php require_once $processdir.'/get-headtags/get-invoice-headtags.php'; ?>

    <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php'; ?>

    <div class="content-container">

    <div class="headerbox">
      <?php echo "Current Open Invoices Today - " . date("l d-M-Y");?>
      <?php echo "<br>Opentaps Orders ceased on 30-November-2020. It was fun."; ?>
    </div> 

      <div class="resultbox">

         <img src="<?php echo $imagedir.'/open-invoices.jpg'; ?>" alt="Open Invoices" width="35" style="float: right">
 
         <div class="resultbox-header">
            Current Open Invoices
         </div>

      <?php
        require_once $processdir.'/get-open-invoices.php';
      ?>

     <table>
       <tr>
         <th>OrderNum</th>
         <th>AccountName</th>
         <th>FirstName</th>
         <th>LastName</th>
         <th>CustomerNum</th>
         <th>InvoiceNum</th>
         <th>InvoiceDate</th>
         <th>InvoiceTotal</th>
         <th>OpenAmount</th>
        </tr>

          <!-- populate table from mysql database -->

        <?php while($row = mysqli_fetch_array($search_result)):?>

         <tr>

         <td><a href=
          
          "<?php echo $viewsdir.'/order-details-view.php'; ?>?OrderNumber=<?php echo $row['OrderNum'];?>&ordernumbersearch="><?php echo $row['OrderNum'];?></a>

          </td>

           <td><a href=
          
              "<?php echo $viewsdir.'/customer-details-view.php'; ?>?CustomerNumber=<?php echo $row['CustomerNum'];?>&accountnumbersearch="><?php echo $row['AccountName'];?></a>

          </td>

           <td><?php echo $row['FirstName'];?></td>
           <td><?php echo $row['LastName'];?></td>

           <td><a href=
          
             "<?php echo $viewsdir.'/customer-details-view.php'; ?>?CustomerNumber=<?php echo $row['CustomerNum'];?>&accountnumbersearch="><?php echo $row['CustomerNum'];?></a>

          </td>

           <td><?php echo $row['InvoiceNum'];?></td>
           <td><?php echo $row['InvoiceDate'];?></td>
           <td><?php echo $row['InvoiceTotal'];?></td>
           <td><?php echo $row['OpenAmount'];?></td>
         </tr>

         <?php endwhile;?>

         </table>
      </div>

    </div>  

      <?php $mysqli->close();?>
          
    </body>
</html>
