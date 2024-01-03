<?php
function convert_to_saudi_numerals($number)
{
    $western_numerals = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $saudi_numerals = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
    return str_replace($western_numerals, $saudi_numerals, $number);
}
$id = $url[1];
$api_url = "https://api.quran.com/api/v4/quran/verses/uthmani";
$response = file_get_contents($api_url);

if ($response === false) {
    echo "Error: Failed to fetch data from the API endpoint";
} else {
    $uthmani_text_data = json_decode($response, true);
    if ($uthmani_text_data === null && json_last_error() !== JSON_ERROR_NONE) {
        echo "Error: API response is not a valid JSON";
    } else {
        
    }
}
