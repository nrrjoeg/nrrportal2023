<div class="orders-container">

<table>
       <tr>
         <th>Customer ID</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Account Name</th>
         <th>Date Created</th>
         <th>Postal Name</th>
         <th>Attn</th>
         <th>Address1</th>
         <th>Address2</th>
         <th>City</th>
         <th>State/Province</th>
         <th>Postal Code</th>
         <th>Country</th>
        </tr>

        <?php while($row = mysqli_fetch_array($search_result)):?>

         <tr>
           <td>
              <a href="<?php echo $viewsdir.'/customer-details-view.php'; ?>?CustomerNumber=<?php echo $row['PARTY_ID'];?>&accountnumbersearch="><?php echo $row['PARTY_ID'];?></a>
          </td>

           <td><?php echo $row['FirstName'];?></td>
           <td><?php echo $row['LastName'];?></td>
           <td><?php echo $row['AccountName'];?></td>
           <td><?php echo $row['DateCreated'];?></td>
           <td><?php echo $row['ToName'];?></td>
           <td><?php echo $row['AttnName'];?></td>
           <td><?php echo $row['Address1'];?></td>
           <td><?php echo $row['Address2'];?></td>
           <td><?php echo $row['City'];?></td>
           <td><?php echo $row['State'];?></td>
           <td><?php echo $row['PostalCode'];?></td>
           <td><?php echo $row['Country'];?></td>
         </tr>

         <?php endwhile;?>

    </table>

</div>