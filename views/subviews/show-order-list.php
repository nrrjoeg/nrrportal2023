<div class="orders-container">

    <?php echo "Number Orders:" . $linecount; ?>

     <table>
        <tr>
          <th style="text-align: center">Order Num</th>
          <th style="text-align: center">Order Date</th>
          <th style="text-align: center">FirstName</th>
          <th style="text-align: center">LastName</th>
          <th style="text-align: center">AccountName</th>
          <th style="text-align: center">Customer Num</th>
          <th style="text-align: center">Store</th>
          <th style="text-align: center">Order Total</th>
          <th style="text-align: center">SalesPerson</th>
        </tr>


    <?php while($row = mysqli_fetch_array($search_result)):?>

        <tr>
              
          <td style="text-align: center">
              <a href=
          
               "<?php echo $viewsdir.'/order-details-view.php'; ?>?OrderNumber=<?php echo $row['OrderNum'];?>&ordernumbersearch="><?php echo $row['OrderNum'];?></a>
          </td>

          <td style="text-align: center"><?php echo $row['OrderDate'];?></td>
          <td style="text-align: center"><?php echo $row['FirstName'];?></td>
          <td style="text-align: center"><?php echo $row['LastName'];?></td>

          <td><a href=
              "<?php echo $viewsdir.'/customer-details-view.php'; ?>?CustomerNumber=<?php echo $row['CustomerNum'];?>&accountnumbersearch="><?php echo $row['AccountName'];?></a>
          </td>

          <td><a href=
              "<?php echo $viewsdir.'/customer-details-view.php'; ?>?CustomerNumber=<?php echo $row['CustomerNum'];?>&accountnumbersearch="><?php echo $row['CustomerNum'];?></a>
          </td>

          <td style="text-align: center"><?php echo $row['Store'];?></td>
          <td style="text-align: center"><?php echo $row['OrderTotal'];?></td>
          <td style="text-align: center"><?php echo $row['SalesPerson'];?></td>
            
        </tr>

    <?php endwhile;?>

     </table>