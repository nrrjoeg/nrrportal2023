<div class="resultbox" style="clear: both">

  <img src="<?php echo $imagedir.'/end-user-icon.png'?>" alt="End User Order Count" width="75px" style= "float: right">

  <div class="resultbox-header">          
        Retail Order Count
  </div>

<table>
               <tr>
               <th>Retail Order Count</th>
              </tr>

         <!-- populate table from mysql database -->

         <?php while($row = mysqli_fetch_array($search_result)):?>

           <tr>
             <td><?php echo $row['EndUserOrderCount'];?></td>
           </tr>

          <?php endwhile;?>

        </table>
     </div>
