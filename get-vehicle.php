<?php

$value = $_POST['val'];
//echo "I got your value! $value";


$url = "http://52.32.253.76:8080/webapp/api/business/getVehicleDetailsByMakeId/" . $value;
$ch = curl_init();

// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$res = curl_exec($ch);
// Closing
curl_close($ch);

//$resp = json_decode($res, true);
//echo var_dump($resp);

echo $res;
?>
