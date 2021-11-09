<?php

$ch = curl_init("https://api.binance.com/api/v3/ticker/price");
$headers = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_exec($ch);
curl_close($ch);
