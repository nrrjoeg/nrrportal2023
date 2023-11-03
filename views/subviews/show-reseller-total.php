<div class="resultbox">

      <img src=" <?php echo $imagedir.'/Reseller.jpg' ?>" alt="Reseller Total Orders" width="55px" style="float: right">

   <div class="resultbox-header">          
       Reseller Total Orders
   </div>

    <table>
         <tr>
           <th>Reseller Total Orders</th>
        </tr>

         <!-- populate table from mysql database -->

     <?php while($row = mysqli_fetch_array($search_result)):?>

        <tr>
         <td><?php echo $row['TotalResellerOrders'];?></td>
        </tr>

     <?php endwhile;?>
    </table>
</div>