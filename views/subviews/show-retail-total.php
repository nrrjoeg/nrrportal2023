<div class="resultbox">

  <img src="<?php echo $imagedir.'/retail-icon.png'?>" alt="Current Month Retail" width="55px" style= "float: right">

  <div class="resultbox-header">          
        Retail Orders
  </div>

<table>
               <tr>
               <th>Total Retail Orders</th>
              </tr>

         <!-- populate table from mysql database -->

         <?php while($row = mysqli_fetch_array($search_result)):?>

           <tr>
             <td><?php echo $row['TotalRetailOrders'];?></td>
           </tr>

          <?php endwhile;?>

        </table>
     </div>