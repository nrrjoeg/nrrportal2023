<?php

  require_once $processdir.'/nrr-connect.php';

  {
    $query = "SELECT * from `OpentapsDW`.`MostRecentOrders`";

    $search_result = mysqli_query($mysqli, $query);

    $customerinfoarray = array();

        if ($result = $mysqli->query($query)) {

            /* fetch associative array */
            
            while ($row = $result->fetch_assoc()) {
               array_push($customerinfoarray, $row);
            }
    
            if(count($customerinfoarray)){
                createXMLfile($customerinfoarray);
            }
            
           /* free result set */
           
           $result->free();
       }
       
       /* close connection */
       
 $mysqli->close();
}

function createXMLfile($ordersArray){
  
    $filePath = 'new-shipments.xml';

    $dom     = new DOMDocument('1.0', 'utf-8');

    $root      = $dom->createElement('');
    
    for($i=0; $i<count($ordersArray); $i++){
      
      $bookId        =  $ordersArray[$i]['id'];  
  
      $bookName      =   htmlspecialchars($booksArray[$i]['title']);
  
      $bookAuthor    =  $booksArray[$i]['author_name']; 
  
      $bookPrice     =  $booksArray[$i]['price']; 
      
      $bookISBN      =  $booksArray[$i]['ISBN']; 
  
      $bookCategory  =  $booksArray[$i]['category'];  
  
      $book = $dom->createElement('book');
  
      $book->setAttribute('id', $bookId);
  
      $name     = $dom->createElement('title', $bookName); 
  
      $book->appendChild($name); 
  
      $author   = $dom->createElement('author', $bookAuthor); 
  
      $book->appendChild($author); 
  
      $price    = $dom->createElement('price', $bookPrice); 
  
      $book->appendChild($price); 
  
      $isbn     = $dom->createElement('ISBN', $bookISBN); 
  
      $book->appendChild($isbn); 
      
      $category = $dom->createElement('category', $bookCategory); 
  
      $book->appendChild($category);
  
      $root->appendChild($book);
    }
  
    $dom->appendChild($root); 
  
    $dom->save($filePath); 
  
} 

?>