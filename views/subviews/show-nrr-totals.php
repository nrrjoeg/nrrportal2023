<div class="resultbox">

    <img src="<?php echo $imagedir.'/cash-register.jpg'; ?>" alt="Total Sales" width="50" style="float: right">
      
    <div class="resultbox-header">                    
         NRR Total Sales
    </div>

    <table>

    <tr><th>Total NRR Orders</th></tr>

         <!-- populate table from mysql database -->

     <?php while($row = mysqli_fetch_array($search_result)):?>

     <tr><td><?php echo $row['OrderTotal'];?></td></tr>

      <?php endwhile;?>

     </table>
</div>