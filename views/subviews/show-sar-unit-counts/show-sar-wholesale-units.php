<div class="resultbox">

  <img src="<?php echo $imagedir.'/sleep-apnea.png'?>" alt="Sleep Apnea Retail" width="40px" style= "float: right">

  <div class="resultbox-header">          
        Wholesale SAR Units
  </div>

<table>
               <tr>
               <th>Wholesale SAR Units</th>
              </tr>

         <!-- populate table from mysql database -->

         <?php while($row = mysqli_fetch_array($search_result)):?>

           <tr>
             <td><?php echo $row['WholesaleSARQuantity'];?></td>
           </tr>

          <?php endwhile;?>

        </table>
     </div>
