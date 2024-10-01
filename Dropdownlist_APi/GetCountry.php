<?php
// get_countries.php

echo $access_token = file_get_contents("http://localhost/PHP/php/Dropdownlist_APi/GetToken.php"); // Replace with the access token retrieved earlier

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.universal-tutorial.com/api/countries");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer $access_token",
    "Accept: application/json"
));

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

echo $response; // This will return the list of countries
?>