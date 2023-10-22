# Powerstone Geolocator
Powerstone Geolocator is a 100% free API developed by PTS Technologies to help developers find the geolocation of any given IP address with ease and it can also display the real-time exchange rate of the country's currency, the API is very easy to use and compatible with your web and mobile apps.<br>
Please note that you will need a free API key from https://developers.powerstonegh.com in order to be able to use this free software, it's easy to generate and it's free.<br>
What can Powerstone Geolocator do for you? Here is a simple wrap up of it's features:<br>
Find the geographical location of your app user or website visitor with the help of their IP address using our JSON API.<br>
You can also be able to display the USD equivalent of any product to your users in real time using the software's live exchange rate converter which is updated hourly.<br>
For a full list of the response properties, check out the documentation here: https://developers.powerstonegh.com/doc<br>
Also do not forget to check our terms of service: https://developers.powerstonegh.com/tos feel free to report bugs or add suggestions, cheers.
<br>
SAMPLE TUTORIAL:<br>
```php


<?php
//Powerstone Geolocator API
$PowerstoneURL='https://developers.powerstonegh.com/api?ip={IP_ADDRESS}&key={YOUR_API_KEY}';
$details = file_get_contents($PowerstoneURL);
//Decode JSON response
$data = json_decode($details);
$ex_rate = $data->{'exchange_rate'}; //You can now use exchange rate $ex_rate anywhere in your project
$country_code = $data->{'country_code'}; //You can now use $country_code anywhere in your project
$country = $data->{'country_name'}; //You can now use $country anywhere in your project
$flag = $data->{'country_flag'}; //You can now use $flag anywhere in your project like so echo '<img src="'.$flag.'" alt="'.$country.'">';
$region = $data->{'country_subdivision'}; //You can now use $region anywhere in your project
$city = $data->{'city'}; //You can now use $city anywhere in your project
$currency = $data->{'currency'}; //You can now use $currency anywhere in your project
$continent = $data->{'continent_name'}; //You can now use $continent anywhere in your project
$longitude = $data->{'longitude'}; //You can now use $longitude anywhere in your project
$latitude = $data->{'latitude'}; //You can now use $latitude anywhere in your project
$local_time = $data->{'country_date_time'}; //You can now use $local_time anywhere in your project
$timezone = $data->{'time_zone'}; //You can now use $timezone anywhere in your project
?>


```
