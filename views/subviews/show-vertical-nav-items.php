<div class="vertical-menu">

<?php
   include $processdir.'/getnavitems.php';
?>
      
<?php while($row = mysqli_fetch_array($search_result)):?>        

<?php
     $filename = $row['ViewFileName'];
     $itemtext = $row['ItemText'];
     $title = $row['Title'];
     $parentdirectory = $row['ParentDirectory'];
?>

  <a href="<?php echo $parentdirectory.'/'.$filename ?>"
         
    <?php if($_SERVER['PHP_SELF']==$parentdirectory.'/'.$filename)
     
     { ?>class="active"
         
    <?php } ?>>
    
    <?php echo $itemtext;?></a>
      
<?php endwhile;?>

</div>