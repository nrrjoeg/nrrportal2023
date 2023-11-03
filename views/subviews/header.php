<?php require_once $processdir.'/get-current-sarasota-weather.php'; ?>

<div id="logoheader">

   <div class="left-icon-container">

     <a href="https://mynaturesrite.com" target="_blank"> 

     <img src="<?php echo $imagedir.'/NRR-Logo.png'?>" alt="Nature's Rite Remedies" width="170">

   </div>

   <div class="weather-container">

        <?php echo "Current Sarasota &emsp; " . $getcurrentweekday . "&ensp;" . date("H:i:s",$getcurrentdate); ?>
        
        <img src = "<?php echo $iconurl; ?>">
        <?php echo $getcurrentweather . '&emsp;'; ?>
        <?php echo $gettemp . '&deg;F'; ?>
        <?php echo '&emsp;Humidity&ensp;' . $gethumidity . '%'; ?>

   </div>

    <div class="right-icon-container">
    
      <img src="<?php echo $imagedir.'/opentaps-logo.png' ?>" alt="Opentaps" width="170" style="float:right"></a>

    </div>

</div>