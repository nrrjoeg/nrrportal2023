<head>

<meta name="robots" content="noindex">

<?php require_once $processdir.'/get-page-titles/get-order-list-titles.php';?>

<?php while($row = mysqli_fetch_array($search_result)):?> 

    <title><?php echo $row['Title'];?></title>
      
<?php endwhile;?>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="https://i0.wp.com/www.mynaturesrite.com/wp-content/uploads/2017/11/cropped-favi-32x32.png?fit=32%2C32&#038;ssl=1" sizes="32x32" />
     
  <link rel="icon" href="https://i0.wp.com/www.mynaturesrite.com/wp-content/uploads/2017/11/cropped-favi-32x32.png?fit=32%2C32&#038;ssl=1" sizes="192x192" />
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type=text/css href="<?php echo $cssdir.'/style.css'; ?>">

</head>