<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';

//nrr-fetch.php - Does database query for Opentaps

$connect = mysqli_connect("127.0.0.1:3336", "joeg", "936xRJyEA7iLSx", "OpentapsDW");

$output = '';

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 
 $query = "
   SELECT * FROM `AllOpentapsCustomers`
   WHERE Lower(`NameCat`) like '%".$search."%'
   or lower(`AccountName`) like '%".$search."%'
   or `PostalCode` = '".$search."'
   or `PARTY_ID` = '".$search."'

   Limit 0,30
 ";
}

else

{
 $query = "
  SELECT * FROM `AllOpentapsCustomers` 
  ORDER BY `PARTY_ID` ASC
  Limit 0,25
 ";
}

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
    <th>AccountNum</th>
     <th>AccountName</th>
     <th>FirstName</th>
     <th>LastName</th>
     <th>City</th>
     <th>State</th>
     <th>PostalCode</th> 
    </tr>
 ';
 
 while($row = mysqli_fetch_array($result))
 {
  $output .= 
  
     '<tr><td><a href="'
    
        .$viewsdir.'/customer-details-view.php?CustomerNumber='
     
        .$row["PARTY_ID"].

        '&accountnumbersearch=">'

        .$row["PARTY_ID"].
       
     '</a></td>
     
     <td>'
       
       .$row["AccountName"].
       
     '</td><td>'
     
        .$row["FirstName"].
         
     '</td><td>'
          
         .$row["LastName"].
     '</td><td>'
             
         .$row["City"].
         
     '</td><td>'
     
         .$row["State"].
         
      '</td><td>'
      
        .$row["PostalCode"].
        
       '</td></tr>';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
