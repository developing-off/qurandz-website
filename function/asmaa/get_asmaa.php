<?php
$url = "https://api.aladhan.com/v1/asmaAlHusna";
$json = file_get_contents($url);
$asma = json_decode($json, TRUE);
$asma = $asma['data'];
?>