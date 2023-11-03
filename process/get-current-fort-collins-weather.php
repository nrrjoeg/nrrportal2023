<?php
  $url = "https://api.openweathermap.org/data/2.5/onecall?lat=40.5853&lon=-105.0844&units=imperial&appid=88745dd2f98a47cb6e28861a890809cf";

  $getweather = file_get_contents($url);

  $json = json_decode($getweather, true);

  $gettimezone = $json['timezone'];

  $getcurrentdate = $json['current']['dt'];

  $getcurrentweekday = date('l',$getcurrentdate);

  $gethumidity = $json['current']['humidity'];

  $gettemp = $json['current']['temp'];

  $getfeelslike = $json['current']['feels_like'];

  $getwindspeed = $json['current']['wind_speed'];

  $getwinddirection = $json['current']['wind_deg'];

  $getwinddirname = $json['current']['wind_deg'];

  $getcurrentweather = ucwords($json['current']['weather']['0']['description']);

  $getclouds = $json['current']['clouds'];

  $getlatitude = $json['lat'];

  $getlongitude = $json['lon'];

  $sunrise = $json['current']['sunrise'];

  $sunset = $json['current']['sunset'];

  $offset = $json['timezone_offset'];

  $localsunrise = $sunrise;

  $localsunset = $sunset;

  $icon = $json['current']['weather']['0']['icon'];

  $iconurl = "https://openweathermap.org/img/wn/".$icon.".png";

  $localtime = (time() + $offset);

  $currenttime = date("Y-M-d H:i:s", $localtime);


  $onehourtime = $json['hourly']['1']['dt'];

  $onehourweekday = date('l', $onehourtime);

  $onehourtemp = $json['hourly']['1']['temp'];

  $onehourhumidity = $json['hourly']['1']['humidity'];

  $onehourdescription = ucwords($json['hourly']['1']['weather']['0']['description']);

  $onehouricon = $json['hourly']['1']['weather']['0']['icon'];

  $onehouriconurl = "https://openweathermap.org/img/wn/".$onehouricon.".png";


  $twohourtime = $json['hourly']['2']['dt'];

  $twohourweekday = date('l', $twohourtime);

  $twohourtemp = $json['hourly']['2']['temp'];

  $twohourhumidity = $json['hourly']['2']['humidity'];

  $twohourdescription = ucwords($json['hourly']['2']['weather']['0']['description']);

  $twohouricon = $json['hourly']['2']['weather']['0']['icon'];

  $twohouriconurl = "https://openweathermap.org/img/wn/".$twohouricon.".png";


  $threehourtime = $json['hourly']['3']['dt'];

  $threehourweekday = date('l', $threehourtime);

  $threehourtemp = $json['hourly']['3']['temp'];

  $threehourhumidity = $json['hourly']['3']['humidity'];

  $threehourdescription = ucwords($json['hourly']['3']['weather']['0']['description']);

  $threehouricon = $json['hourly']['3']['weather']['0']['icon'];

  $threehouriconurl = "https://openweathermap.org/img/wn/".$threehouricon.".png";


  $sixhourtime = $json['hourly']['6']['dt'];

  $sixhourweekday = date('l', $sixhourtime);

  $sixhourtemp = $json['hourly']['6']['temp'];

  $sixhourhumidity = $json['hourly']['6']['humidity'];

  $sixhourdescription = ucwords($json['hourly']['6']['weather']['0']['description']);

  $sixhouricon = $json['hourly']['6']['weather']['0']['icon'];

  $sixhouriconurl = "https://openweathermap.org/img/wn/".$sixhouricon.".png";


  $ninehourtime = $json['hourly']['9']['dt'];

  $ninehourweekday = date('l', $ninehourtime);

  $ninehourtemp = $json['hourly']['9']['temp'];

  $ninehourhumidity = $json['hourly']['9']['humidity'];

  $ninehourdescription = ucwords($json['hourly']['9']['weather']['0']['description']);

  $ninehouricon = $json['hourly']['9']['weather']['0']['icon'];

  $ninehouriconurl = "https://openweathermap.org/img/wn/".$ninehouricon.".png";


  $twelvehourtime = $json['hourly']['12']['dt'];

  $twelvehourweekday = date('l', $twelvehourtime);

  $twelvehourtemp = $json['hourly']['12']['temp'];

  $twelvehourhumidity = $json['hourly']['12']['humidity'];

  $twelvehourdescription = ucwords($json['hourly']['12']['weather']['0']['description']);

  $twelvehouricon = $json['hourly']['12']['weather']['0']['icon'];

  $twelvehouriconurl = "https://openweathermap.org/img/wn/".$twelvehouricon.".png";


  $fifteenhourtime = $json['hourly']['15']['dt'];

  $fifteenhourweekday = date('l', $fifteenhourtime);

  $fifteenhourtemp = $json['hourly']['15']['temp'];

  $fifteenhourhumidity = $json['hourly']['15']['humidity'];

  $fifteenhourdescription = ucwords($json['hourly']['15']['weather']['0']['description']);

  $fifteenhouricon = $json['hourly']['15']['weather']['0']['icon'];

  $fifteenhouriconurl = "https://openweathermap.org/img/wn/".$fifteenhouricon.".png";


  $eighteenhourtime = $json['hourly']['18']['dt'];

  $eighteenhourweekday = date('l', $eighteenhourtime);

  $eighteenhourtemp = $json['hourly']['18']['temp'];
  
  $eighteenhourhumidity = $json['hourly']['18']['humidity'];
  
  $eighteenhourdescription = ucwords($json['hourly']['18']['weather']['0']['description']);
  
  $eighteenhouricon = $json['hourly']['18']['weather']['0']['icon'];

  $eighteenhouriconurl = "https://openweathermap.org/img/wn/".$eighteenhouricon.".png";
  

  $twentyonehourtime = $json['hourly']['21']['dt'];

  $twentyonehourweekday = date('l', $twentyonehourtime);

  $twentyonehourtemp = $json['hourly']['21']['temp'];
  
  $twentyonehourhumidity = $json['hourly']['21']['humidity'];
  
  $twentyonehourdescription = ucwords($json['hourly']['21']['weather']['0']['description']);
  
  $twentyonehouricon = $json['hourly']['21']['weather']['0']['icon'];

  $twentyonehouriconurl = "https://openweathermap.org/img/wn/".$twentyonehouricon.".png";


  $twentyfourhourtime = $json['hourly']['24']['dt'];

  $twentyfourhourweekday = date('l', $twentyfourhourtime);

  $twentyfourhourtemp = $json['hourly']['24']['temp'];
  
  $twentyfourhourhumidity = $json['hourly']['24']['humidity'];
  
  $twentyfourhourdescription = ucwords($json['hourly']['24']['weather']['0']['description']);
  
  $twentyfourhouricon = $json['hourly']['24']['weather']['0']['icon'];

  $twentyfourhouriconurl = "https://openweathermap.org/img/wn/".$twentyfourhouricon.".png";

 
  $dayonedate = $json['daily']['1']['dt'];

  $dayoneweekday = date('l', $dayonedate);

  $dayonesunrise = $json['daily']['1']['sunrise'];

  $dayonesunset = $json['daily']['1']['sunset'];

  $dayonedaytimetemp = $json['daily']['1']['temp']['day'];

  $dayonemintemp = $json['daily']['1']['temp']['min'];

  $dayonemaxtemp = $json['daily']['1']['temp']['max'];

  $dayonenighttemp = $json['daily']['1']['temp']['night'];

  $dayoneeveningtemp = $json['daily']['1']['temp']['eve'];

  $dayonenmorningtemp = $json['daily']['1']['temp']['morn'];

  $dayonehumidity = $json['daily']['1']['humidity'];

  $dayonewindspeed = $json['daily']['1']['wind_speed'];

  $dayonewindheading = $json['daily']['1']['wind_deg'];

  $dayoneweatherdescription = ucwords($json['daily']['1']['weather']['0']['description']);

  $dayoneicon = $json['daily']['1']['weather']['0']['icon'];

  $dayoneiconurl = "https://openweathermap.org/img/wn/".$dayoneicon.".png";


  $daytwodate = $json['daily']['2']['dt'];

  $daytwoweekday = date('l', $daytwodate);

  $daytwosunrise = $json['daily']['2']['sunrise'];

  $daytwosunset = $json['daily']['2']['sunset'];

  $daytwodaytimetemp = $json['daily']['2']['temp']['day'];

  $daytwomintemp = $json['daily']['2']['temp']['min'];

  $daytwomaxtemp = $json['daily']['2']['temp']['max'];

  $daytwonighttemp = $json['daily']['2']['temp']['night'];

  $daytwoeveningtemp = $json['daily']['2']['temp']['eve'];

  $daytwonmorningtemp = $json['daily']['2']['temp']['morn'];

  $daytwohumidity = $json['daily']['2']['humidity'];

  $daytwowindspeed = $json['daily']['2']['wind_speed'];

  $daytwowindheading = $json['daily']['2']['wind_deg'];

  $daytwoweatherdescription = ucwords($json['daily']['2']['weather']['0']['description']);

  $daytwoicon = $json['daily']['2']['weather']['0']['icon'];

  $daytwoiconurl = "https://openweathermap.org/img/wn/".$daytwoicon.".png";


  $daythreedate = $json['daily']['3']['dt'];

  $daythreeweekday = date('l', $daythreedate);

  $daythreesunrise = $json['daily']['3']['sunrise'];

  $daythreesunset = $json['daily']['3']['sunset'];

  $daythreedaytimetemp = $json['daily']['3']['temp']['day'];

  $daythreemintemp = $json['daily']['3']['temp']['min'];

  $daythreemaxtemp = $json['daily']['3']['temp']['max'];

  $daythreenighttemp = $json['daily']['3']['temp']['night'];

  $daythreeeveningtemp = $json['daily']['3']['temp']['eve'];

  $daythreenmorningtemp = $json['daily']['3']['temp']['morn'];

  $daythreehumidity = $json['daily']['3']['humidity'];

  $daythreewindspeed = $json['daily']['3']['wind_speed'];

  $daythreewindheading = $json['daily']['3']['wind_deg'];

  $daythreeweatherdescription = ucwords($json['daily']['3']['weather']['0']['description']);

  $daythreeicon = $json['daily']['3']['weather']['0']['icon'];

  $daythreeiconurl = "https://openweathermap.org/img/wn/".$daythreeicon.".png";



  $dayfourdate = $json['daily']['4']['dt'];

  $dayfourweekday = date('l', $dayfourdate);

  $dayfoursunrise = $json['daily']['4']['sunrise'];

  $dayfoursunset = $json['daily']['4']['sunset'];

  $dayfourdaytimetemp = $json['daily']['4']['temp']['day'];

  $dayfourmintemp = $json['daily']['4']['temp']['min'];

  $dayfourmaxtemp = $json['daily']['4']['temp']['max'];

  $dayfournighttemp = $json['daily']['4']['temp']['night'];

  $dayfoureveningtemp = $json['daily']['4']['temp']['eve'];

  $dayfournmorningtemp = $json['daily']['4']['temp']['morn'];

  $dayfourhumidity = $json['daily']['4']['humidity'];

  $dayfourwindspeed = $json['daily']['4']['wind_speed'];

  $dayfourwindheading = $json['daily']['4']['wind_deg'];

  $dayfourweatherdescription = ucwords($json['daily']['4']['weather']['0']['description']);

  $dayfouricon = $json['daily']['4']['weather']['0']['icon'];

  $dayfouriconurl = "https://openweathermap.org/img/wn/".$dayfouricon.".png";


  $dayfivedate = $json['daily']['5']['dt'];

  $dayfiveweekday = date('l', $dayfivedate);

  $dayfivesunrise = $json['daily']['5']['sunrise'];

  $dayfivesunset = $json['daily']['5']['sunset'];

  $dayfivedaytimetemp = $json['daily']['5']['temp']['day'];

  $dayfivemintemp = $json['daily']['5']['temp']['min'];

  $dayfivemaxtemp = $json['daily']['5']['temp']['max'];

  $dayfivenighttemp = $json['daily']['5']['temp']['night'];

  $dayfiveeveningtemp = $json['daily']['5']['temp']['eve'];

  $dayfivenmorningtemp = $json['daily']['5']['temp']['morn'];

  $dayfivehumidity = $json['daily']['5']['humidity'];

  $dayfivewindspeed = $json['daily']['5']['wind_speed'];

  $dayfivewindheading = $json['daily']['5']['wind_deg'];

  $dayfiveweatherdescription = ucwords($json['daily']['5']['weather']['0']['description']);

  $dayfiveicon = $json['daily']['5']['weather']['0']['icon'];

  $dayfiveiconurl = "https://openweathermap.org/img/wn/".$dayfiveicon.".png";


  $daysixdate = $json['daily']['6']['dt'];

  $daysixweekday = date('l', $daysixdate);

  $daysixsunrise = $json['daily']['6']['sunrise'];

  $daysixsunset = $json['daily']['6']['sunset'];

  $daysixdaytimetemp = $json['daily']['6']['temp']['day'];

  $daysixmintemp = $json['daily']['6']['temp']['min'];

  $daysixmaxtemp = $json['daily']['6']['temp']['max'];

  $daysixnighttemp = $json['daily']['6']['temp']['night'];

  $daysixeveningtemp = $json['daily']['6']['temp']['eve'];

  $daysixnmorningtemp = $json['daily']['6']['temp']['morn'];

  $daysixhumidity = $json['daily']['6']['humidity'];

  $daysixwindspeed = $json['daily']['6']['wind_speed'];

  $daysixwindheading = $json['daily']['6']['wind_deg'];

  $daysixweatherdescription = ucwords($json['daily']['6']['weather']['0']['description']);

  $daysixicon = $json['daily']['6']['weather']['0']['icon'];

  $daysixiconurl = "https://openweathermap.org/img/wn/".$daysixicon.".png";


  $daysevendate = $json['daily']['7']['dt'];

  $daysevenweekday = date('l', $daysevendate);

  $daysevensunrise = $json['daily']['7']['sunrise'];

  $daysevensunset = $json['daily']['7']['sunset'];

  $daysevendaytimetemp = $json['daily']['7']['temp']['day'];

  $daysevenmintemp = $json['daily']['7']['temp']['min'];

  $daysevenmaxtemp = $json['daily']['7']['temp']['max'];

  $daysevennighttemp = $json['daily']['7']['temp']['night'];

  $dayseveneveningtemp = $json['daily']['7']['temp']['eve'];

  $daysevennmorningtemp = $json['daily']['7']['temp']['morn'];

  $daysevenhumidity = $json['daily']['7']['humidity'];

  $daysevenwindspeed = $json['daily']['7']['wind_speed'];

  $daysevenwindheading = $json['daily']['7']['wind_deg'];

  $daysevenweatherdescription = ucwords($json['daily']['7']['weather']['0']['description']);

  $daysevenicon = $json['daily']['7']['weather']['0']['icon'];

  $dayseveniconurl = "https://openweathermap.org/img/wn/".$daysevenicon.".png";

?>