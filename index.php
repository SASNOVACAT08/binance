<?php

$url = "https://api.binance.com/api/v3/ticker/price";

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl = curl_exec($curl)
$curl_close($curl)
   
echo($curl)
