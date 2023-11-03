<?php

//nrr-fetch-invoices.php - Does database query to find Invoice information.

$connect = mysqli_connect("localhost", "joeg", "VCVrK5CoJ9YSad", "OpentapsDW");

$output = '';

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 
 $query = "
   SELECT * FROM `AllInvoicesTable`
   WHERE Lower(`NameCat`) like '%".$search."%'
   or lower(`AccountName`) like '%".$search."%'
   or `OrderNum` = '".$search."'
   Limit 0,150
 ";
}

else

{
 $query = "
  SELECT * FROM `AllInvoicesTable` 
  ORDER BY `OrderNum` ASC
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
                <th>CustomerNum</th>
                <th>OrderNumber</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>AccountName</th>
                <th>InvoiceNumber</th>
                <th>Status</th>
                <th>InvoiceDate</th>
                <th>InvoiceTotal</th>
                <th>PaidDate</th> 
            </tr>
 ';
 
 while($row = mysqli_fetch_array($result))
 {
  $output .= 
  
     '<tr><td><a href="'
    
        .$viewsdir.'/nrrportal/views/customer-details-view.php?CustomerNumber='
     
        .$row["CustomerNum"].

        '&accountnumbersearch=">'

        .$row["CustomerNum"].
       
     '</a></td>
     
     <td><a href="'

        .$viewsdir.'/nrrportal/views/order-details-view.php?OrderNumber='

        .$row["OrderNum"].

        '&ordernumbersearch=">'
       
        .$row["OrderNum"].
       
     '</a></td><td>'

        .$row["FirstName"].

    '</td><td>'

        .$row["LastName"].

    '</td><td>'

        .$row["AccountName"].

    '</td><td>'
     
        .$row["InvoiceNum"].
         
     '</td><td>'
          
         .$row["Status"].
     '</td><td>'
             
         .$row["InvoiceDate"].
         
     '</td><td>'

        .$row["InvoiceTotal"].     

     '</td><td>'
     
         .$row["PaidDate"].
         
      '</td></tr>';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>