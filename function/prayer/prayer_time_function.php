<?php
$year = date('Y');
$month = date('m');
$url = "https://api.aladhan.com/v1/calendarByCity?city=oran&country=algeria&method=3&month=$month&year=$year";
$json = file_get_contents($url);
$prayer_times = json_decode($json, TRUE);
$prayer_times = $prayer_times['data'];
$today_date = date("d-m-Y");

?>