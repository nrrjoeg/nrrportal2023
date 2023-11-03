<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<div class="presentation-container">

         <?php while($row = mysqli_fetch_array($search_result)):?>

    <div class="presentation-container-title">
        Average Order
    </div>
    
          <table>
            <tr><td>Customer <b><?php echo $CustomerNumbertoSearch; ?></b> Average Order</td> <td><b><?php echo $row['AvgOrderTotal'];?></b></td></tr>
          </table>  
 </div>

         <?php endwhile;?>
     
     </div>