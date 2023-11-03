<div class="resultbox">

     <img src="<?php echo $imagedir.'/florida-icon.png'; ?>" alt="FL Sales Tax" width="55" style= "float: right">

     <div class="resultbox-header">          
         Florida Sales Tax
    </div>

<table>
           <tr>
              <th>Taxing Entity</th>
              <th>Taxes Paid</th>

           </tr>

           <!-- populate table from mysql database -->

       <?php while($row = mysqli_fetch_array($search_result)):?>

           <tr>
              <td><?php echo $row['TaxingEntity'];?></td>
              <td><?php echo $row['InvoiceSalesTax'];?></td>
          </tr>
                  <?php endwhile;?>

          </table>

      </div>
