<?php

$ch = curl_init("https://api.binance.com/api/v3/ticker/price");
curl_exec($ch);
curl_close($ch);
