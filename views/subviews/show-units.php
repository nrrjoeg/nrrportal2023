<div class="resultbox">

      <img src="<?php echo $imagedir.'/bar-chart.png';?>" alt="Opentaps" width="45" style = "float: right">
      
      <div class="resultbox-header">          
         Unit Counts
      </div>

    <table>
       <tr>
         <th>ProductNum</th>
         <th>ItemDesc</th>
         <th>QuantityOrdered</th>
         <th>TotalDollars</th>
         <th>AveragePrice</th>
        </tr>

        <?php while($row = mysqli_fetch_array($search_result)):?>

         <tr>
           <td><?php echo $row['ProductNum'];?></td>
           <td><?php echo $row['ItemDesc'];?></td>
           <td><?php echo $row['QuantityOrdered'];?></td>
           <td><?php echo $row['TotalDollars'];?></td>
           <td><?php echo $row['AveragePrice'];?></td>
         </tr>

         <?php endwhile;?>

    </table>
</div>