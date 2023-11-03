<div class="resultbox">
      <img src="<?php echo $imagedir.'/dr-bruce-west.jpg' ?>" alt="Dr. West" width="55px" style="float: right">
	  
      <div class="resultbox-header">          
         Health Alert Orders
    </div>

        <table>
               <tr>
               <th>Health Alert Total</th>
              </tr>

         <!-- populate table from mysql database -->

         <?php while($row = mysqli_fetch_array($search_result)):?>

           <tr>
             <td><?php echo $row['DrWestOrders'];?></td>
           </tr>

          <?php endwhile;?>

        </table>
   </div>