<?php
ob_start();
$ip_address=$_SERVER['REMOTE_ADDR'];
$key = "{YOUR_API_KEY}"; //Generate a free one from https://developers.powerstonegh.com

//Powerstone geolocator api
$PowerstoneURL='https://developers.powerstonegh.com/api?ip='.$ip_address.'&key='.$key.'';
$DetailsArr = file_get_contents($PowerstoneURL);
$json = json_decode($DetailsArr);
$status = $json->{'status'};
$rate = $json->{'exchange_rate'};
$ccode = $json->{'country_code'};
$country = $json->{'country_name'};
$region = $json->{'country_subdivision'};
$city = $json->{'city'};
$flag_image = $json->{'country_flag'};
$currency = $json->{'currency'};
$continent = $json->{'continent_name'};
$longitude = $json->{'longitude'};
$latitude = $json->{'latitude'};
$local_time = $json->{'country_date_time'};
$timezone = $json->{'time_zone'};
$response = $json->{'response'};
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Powerstone Geolocator test page</title>
<meta name="description" content="Testing geolocator by PHP example">

<style>
.logos{
color:#000;
font-size:17px;
line-height:25px;
}
.logos img {
    width: 17px;
    height: 17px;
    vertical-align: middle;
}
</style>
</head>
<body>

<?php
if($status == "success"){

$rate = number_format($rate, 2);

$flag = "<img src='".$flag_image."'>&nbsp;";


echo "<div class='logos'>IP Address: ".$ip_address."<br>
Location: ".$flag.$country." - ".$region.", ".$city."<br>
Continent: ".$continent."<br>
Country ISO Code: ".$ccode."<br>
Time Zone: ".$timezone."<br>
Country Date & Time: ".$local_time."<br>
Longitude: ".$longitude."<br>
Latitude: ".$latitude."<br>
Currency: ".$currency."<br>
Current USD Exchange Rate: ".$currency.$rate."</div>";
}
else
{
    echo "Error: ".$response."<br>";
}

?>

</body>
</html>

<?php
ob_end_flush();
?>