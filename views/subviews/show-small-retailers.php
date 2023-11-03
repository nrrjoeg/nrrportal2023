<div class="resultbox">
       <img src="<?php echo $imagedir.'/small-retailer.png' ?>" alt="Small-Resellers" width="45" style = "float: right">
    
    <div class="resultbox-header">          
        Small Resellers
    </div>

             <table>
                <tr>
                <th>Total Small Reseller Sales</th>
          </tr>

          <!-- populate table from mysql database -->

   <?php while($row = mysqli_fetch_array($search_result)):?>

                <tr>
                     <td><?php echo $row['TotalSmallResellerOrders'];?></td>
               </tr>

                 <?php endwhile;?>

         </table>
     </div>