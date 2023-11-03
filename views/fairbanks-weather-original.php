<?php require_once $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config/config.php';?>

<!DOCTYPE html>

<html>
<?php require_once $processdir.'/get-headtags/get-weather-headtags.php'; ?>

    <body>

    <?php require_once $subviewsdir.'/header.php'; ?>

    <?php require_once $subviewsdir.'/vertical-menu.php'; ?>

    <?php require_once $processdir.'/get-current-fairbanks-weather.php'; ?>

  <div class="content-container">

     <div class="headerbox">
       <?php echo "Currently in Fairbanks: Latitude &ensp;" .$json['lat']. '&ensp; Longitude &ensp;' . $json['lon'];  ?>
     </div>

      <?php echo "Current Time: " . $currenttime; ?>

    <div class="resultbox">

       <table>

          <th>Item</th>
          <th>Current Value</th>
          <tr><th>Humidity</th><td><?php echo $gethumidity . "%"; ?></td>
          <tr><th>Temperature</th><td><?php echo round($gettemp,0) . '&deg;F'; ?></td></tr>
          <tr><th>Feels Like</th><td><?php echo round($getfeelslike,0) . "&deg;F"; ?></td></tr>
          <tr><th>Wind Speed</th><td><?php echo round($getwindspeed,1) . ' MPH'; ?></td></tr>
          <tr><th>Wind Heading</th><td><?php echo $getwinddirection . '&deg;'; ?></td></tr>
          <tr><th>Cloud Coverage</th><td><?php echo $getclouds . '%'; ?></td></tr>
          <tr><th>Sunrise Today</th><td><?php echo date('H:i', $localsunrise );?></td></tr>
          <tr><th>Sunset Tonight</th><td><?php echo date('H:i', $localsunset );?></td></tr>
       </table>

       </div>

       <div class="place-image-container">
            <img src="https://news.uaf.edu/wp-content/uploads/2012/01/TP-12-3255-14.jpg" width="600px" alt="Fairbanks Alaska">
         </div>

      <div class="headerbox">
       24 Hour Forecast
     </div>

    <div class="resultbox">

       <table>

       <tr>
          <th>Day</th>
          <?php 
             for ($x = 1; $x <= 24; $x+=3){
               echo '<th>';
               print_r(date('l',$json['hourly'][$x]['dt']));
               echo '</th>';
             }
          ?>
       </tr>

       <tr>
          <th>Time</th>
          <?php 
             for ($x = 1; $x <= 24; $x+=3){
               echo '<td>';
               print_r(date('H:i',$json['hourly'][$x]['dt']));
               echo '</td>';
             }
          ?>
       </tr>

       <tr>
          <th>Temp &deg;F</th>
          <?php 
             for ($x = 1; $x <= 24; $x+=3){
               echo '<td>';
               print_r(round($json['hourly'][$x]['temp']),0);
               echo '&deg;F</td>';
             }
          ?>
          
       </tr>

       <tr>
          <th>Humidity</th>
          <?php 
             for ($x = 1; $x <= 24; $x+=3){
               echo '<td>';
               print_r(round($json['hourly'][$x]['humidity']),0);
               echo '%</td>';
             }
          ?>
       </tr>

       <tr>
          <th>Conditions</th>
          <?php 
             for ($x = 1; $x <= 24; $x+=3){
               echo '<td><img src = "https://openweathermap.org/img/wn/';
               print_r($json['hourly'][$x]['weather']['0']['icon']);
               echo '.png"</td>';
             }
          ?>
       </tr>

       <tr>
          <th>Description</th>
          <?php 
             for ($x = 1; $x <= 24; $x+=3){
               echo '<td>';
               print_r(ucfirst($json['hourly'][$x]['weather']['0']['description']));
               echo '</td>';
             }
          ?>
       </tr>

       </table>

    </div>

    <div class="headerbox">
       7 Day Forecast 
     </div>

    <div class="resultbox">

    <table>
      <tr>
          <th>Day</th>
          <?php 
             for ($x = 1; $x <= 7; $x++){
               echo '<th>';
               print_r(date('l',$json['daily'][$x]['dt']));
               echo '</th>';
             }
          ?>
      </tr>

      <tr>
          <th>Description</th>
          <?php 
             for ($x = 1; $x <= 7; $x++){
               echo '<td>';
               print_r(ucfirst($json['daily'][$x]['weather']['0']['description']));
               echo '</td>';
             }
          ?>
       </tr>

       <tr>
          <th>Conditions</td>
          <?php 
             for ($x = 1; $x <= 7; $x++){
               echo '<td><img src = "https://openweathermap.org/img/wn/';
               print_r($json['daily'][$x]['weather']['0']['icon']);
               echo '.png"</td>';
             }
          ?>
       </tr>

       <tr>
          <th>High Temp</th>
          <?php 
             for ($x = 1; $x <= 7; $x++){
               echo '<td>';
               print_r(round($json['daily'][$x]['temp']['max'],0));
               echo '&deg;F</td>';
             }
          ?>
       </tr>

       <tr>
          <th>Low Temp</th>
          <?php 
             for ($x = 1; $x <= 7; $x++){
               echo '<td>';
               print_r(round($json['daily'][$x]['temp']['min'],0));
               echo '&deg;F</td>';
             }
          ?>
       </tr>

       <tr>
         <th>Evening Temp</th>
         <?php 
             for ($x = 1; $x <= 7; $x++){
               echo '<td>';
               print_r(round($json['daily'][$x]['temp']['eve'],0));
               echo '&deg;F</td>';
             }
          ?>
       </tr>

       <tr>
          <th>Humidity</th>
          <?php 
             for ($x = 1; $x <= 7; $x++){
               echo '<td>';
               print_r($json['daily'][$x]['humidity']);
               echo '%</td>';
             }
          ?>
      </tr>

      <tr>
          <th>Wind Speed</th>
          <?php 
             for ($x = 1; $x <= 7; $x++){
               echo '<td>';
               print_r(round($json['daily'][$x]['wind_speed'],0));
               echo ' MPH</td>';
             }
          ?>
      </tr>

      <tr>
          <th>Wind Heading</th>
          <?php 
             for ($x = 1; $x <= 7; $x++){
               echo '<td>';
               print_r($json['daily'][$x]['wind_deg']);
               echo '&deg;</td>';
             }
          ?>
      </tr>

      <tr>
          <th>Sunrise</th>
          <?php 
             for ($x = 1; $x <= 7; $x++){
               echo '<td>';
               print_r(date('H:i', $json['daily'][$x]['sunrise']));
               echo '</td>';
             }
          ?>
      </tr>

      <tr>
          <th>Sunset</th>
          <?php 
             for ($x = 1; $x <= 7; $x++){
               echo '<td>';
               print_r(date('H:i', $json['daily'][$x]['sunset']));
               echo '</td>';
             }
          ?>
      </tr>


     </table>    

    </div>

  </div>

    </body>
</html>
