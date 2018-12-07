<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <link href="main.css" rel="stylesheet"> -->
    <title>Température</title>
  </head>
  <body>
    <h1>Température</h1>

    <?php

$filename = "data.json";
$data_json = file_get_contents($json_url);
$data = json_decode($data_json);
$data_update = filemtime($filename);
$bargraph_height = 191 + $data->temperature  * 4 ;
$bargraph_top = 315 - $data->temperature *  4 ;


    $datMod = 'data.json';
      if (file_exists($datMod)) {
        echo "$datMod a été modifié le : " . date("d-m-Y H:i:s.", filectime($datMod));
      }

     ?>
     <p> il fait <?php  echo $data->temperature;  ?> °C avec <?php  echo $data->humidite;  ?>% d'humidité. Le 30/11/2018</p>
 <div id="thermometer"  style="height: <?php  echo $data->bargraph_height;  ?>px;  top : <?php  echo $data->bargraph_top;  ?>px;">
  <div id="bargraph"></div>
</div>

<style>
  #thermometer {
  display: block;
  width: 100px;
  height: 600px;
  background-image: url("img/thermometer.jpg");
}

#bargraph {
  display: block;
  position: relative;
  height: 161px;
  width: 9px;
  top: 315px;
  left: 45px;
  background-color: red;
}
</style>
  </body>
</html>
