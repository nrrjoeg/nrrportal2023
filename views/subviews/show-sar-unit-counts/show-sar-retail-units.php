<div class="resultbox" style="clear: both">

  <img src="<?php echo $imagedir.'/sleep-apnea.png'?>" alt="Sleep Apnea Retail" width="40px" style= "float: right">

  <div class="resultbox-header">          
        Retail SAR Units
  </div>

<table>
               <tr>
               <th>Retail SAR Units</th>
              </tr>

         <!-- populate table from mysql database -->

         <?php while($row = mysqli_fetch_array($search_result)):?>

           <tr>
             <td><?php echo $row['RetailSARQuantity'];?></td>
           </tr>

          <?php endwhile;?>

        </table>
     </div>
