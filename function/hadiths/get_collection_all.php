<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.sunnah.com/v1/collections",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_POSTFIELDS => "{}",
    CURLOPT_HTTPHEADER => array(
        "x-api-key: SqD712P3E82xnwOAEOkGd5JZH8s9wRR24TqNFzjk"
    ),
)
);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
        $data = json_decode($response);
        $collections = $data->data;
    #var_dump($collections[0]->name);
}
?>