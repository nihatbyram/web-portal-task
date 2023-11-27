<?php
// getData.php

// API info
$apiUrl = "https://api.baubuddy.de/dev/index.php/v1/tasks/select";
$username = "365";
$password = "1";

// oauth
$headers = [
    "Authorization: Basic " . base64_encode("API_Username:API_Password"),
    "Content-Type: application/json",
];

// cURL request
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $apiUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
]);
$response = curl_exec($curl);
curl_close($curl);

// return json
header('Content-Type: application/json');
echo $response;
?>
