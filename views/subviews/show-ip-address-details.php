<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<div class="presentation-container">

         <?php while($row = mysqli_fetch_array($search_result)):?>


    <div class = "presentation-container-title">
        IP Address Details
        <?php echo "Yeah Baby we are now showing the details....!" ?>
    </div>

        <table>
            <tr><td>IP Address</td> <td><b><?php echo $IPAddressToSearch;?></b></td></tr>
            <tr><td>Region</td> <td><b><?php echo $row['region_name'];?></b></td></tr>
            <tr><td>City</td> <td><?php echo $row['city_name'];?></td></tr>
            <tr><td>Country</td> <td><b><?php echo $row['country_name'];?></b></td></tr>
            <tr><td>Latitude</td> <td><?php echo $row['latitude'];?></td></tr>
            <tr><td>Longitude</td> <td><?php echo $row['longitude'];?></td></tr>
            <tr><td>Postal Code</td> <td><?php echo $row['zip_code'];?></td></tr>
            <tr><td>TimeZone</td> <td><?php echo $row['time_zone'];?></td></tr>
        </table>  
</div>

         <?php endwhile;?>