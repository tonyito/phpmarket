<?php
$user_ip = '96.44.145.122';
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];
$region = $geo["geoplugin_region"];

$citylist = array("San Diego", "Dallas", "New York");

if (in_array("$city", $citylist)) {
  $city = strtolower($city);
  header("Location: /$city.php");
}

//placeholder
$user = 'tonito';
?>
