<div class="resultbox">

      <img src=" <?php echo $imagedir.'/Reseller.jpg' ?>" alt="Wholesale Order Count" width="55px" style="float: right">

   <div class="resultbox-header">          
       Wholesale Order Count
   </div>

    <table>
         <tr>
           <th>Wholesale Order Count</th>
        </tr>

         <!-- populate table from mysql database -->

     <?php while($row = mysqli_fetch_array($search_result)):?>

        <tr>
         <td><?php echo $row['ResellerOrderCount'];?></td>
        </tr>

     <?php endwhile;?>
    </table>
</div>