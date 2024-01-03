<?php

$id = $url[1];
$api_url = "https://api.quran.com/api/v4/chapters/$id/?language=ar";
$response = file_get_contents($api_url);

if($response === false){
    echo "Error: Failed to fetch data from the API endpoint";
}else{
    $data = json_decode($response, true);
    if($data === null && json_last_error() !== JSON_ERROR_NONE){
      echo "Error: API response is not a valid JSON";
    }else{
        $name_sura_arabic = $data['chapter']['name_arabic'];  
    }
}

?>