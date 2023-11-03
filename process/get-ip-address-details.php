<?php

require_once $processdir.'/ip-geolocate-connect.php';

if(isset($_GET['ipaddressseaarch']))

    {
      
      $IPAddressToSearch = $_GET['IPAddress'];

      $linecount = 0;

      $query = "SELECT *
  
        from
            `IPGeoLocation`.`ip2location_db11`
  
        where inet_aton('$IPAddressToSearch') >= `ip_from`
            and inet_aton('$IPAddressToSearch') <= `ip_to`";

    $search_result = mysqli_query($mysqli, $query);
    $linecount = mysqli_num_rows($search_result);

    echo 'Our IP Address is : ' .$IPAddressToSearch;

    echo "Yeah, baby!";

    }
?>