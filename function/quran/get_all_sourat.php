<?php 
$url = 'https://api.quran.com/api/v4/chapters?language=ar';
$json = file_get_contents($url);
if ($json !== false) {
    $data_sourat = json_decode($json, true);
    if (json_last_error() == JSON_ERROR_NONE) {
        $surat_all = $data_sourat['chapters'];
    } else {
        echo "Error: json is invalid";
    }
} else {
    echo "Error: failed to read the file";
}
?>