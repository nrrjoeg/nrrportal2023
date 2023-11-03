<div class="orders-container">

  <table>
        <tr>
          <th style="text-align: center">Order Num</th>
          <th style="text-align: center">Line Item</th>
          <th style="text-align: center">Product Number</th>
          <th style="text-align: center">Description</th>
          <th style="text-align: center">Quantity</th>
          <th style="text-align: center">Unit Price</th>
          <th style="text-align: center">Extended Price</th>
        </tr>


        <?php while($row = mysqli_fetch_array($search_result)):?>

        <tr>
              
          <td style="text-align: center"><?php echo $row['OrderNum'];?></td>
          <td style="text-align: center"><?php echo $row['LineItem'];?></td>
          <td style="text-align: center"><?php echo $row['ProductNum'];?></td>
          <td style="text-align: center"><?php echo $row['Description'];?></td>
          <td style="text-align: center"><?php echo $row['Quantity'];?></td>
          <td style="text-align: center"><?php echo $row['UnitPrice'];?></td>
          <td style="text-align: center"><?php echo $row['ExtendedPrice'];?></td>
            
        </tr>

        <?php endwhile;?>

     </table>
</div>