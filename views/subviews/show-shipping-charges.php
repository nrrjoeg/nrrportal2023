<div class="resultbox">
      
      <img src="<?php echo $imagedir.'/truck.png'?>" alt="Shipping Charges" width="50" style="float:right">

  <div class="resultbox-header">          
         Shipping Charges
  </div>
      
  <table>
    <tr>
      <th>Shipping Charges Collected</th>
    </tr>

    <?php while($row = mysqli_fetch_array($search_result)):?>

    <tr>
       <td><?php echo $row['TotalShippingCharges'];?></td>
    </tr>

     <?php endwhile;?>

  </table>
</div>
