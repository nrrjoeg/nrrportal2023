<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<div class="presentation-container">

         <?php while($row = mysqli_fetch_array($search_result)):?>

    <div class="presentation-container-title">
        Customer Basics
    </div>
    
          <table>
            <tr><td>Customer Number</td> <td><b><?php echo $row['AccountNum'];?></b></td></tr>
            <tr><td>First Name</td> <td><b><?php echo $row['FirstName'];?></b></td></tr>
            <tr><td>Last Name</td> <td><b><?php echo $row['LastName'];?></b></td></tr>
            <tr><td>Account Name</td> <td><b><?php echo $row['AccountName'];?></b></td></tr>
            <tr><td>Creation Date</td> <td><?php echo $row['DateCreated'];?></td></tr>
          </table>  
 </div>

         <?php endwhile;?>
     
     </div>