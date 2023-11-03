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