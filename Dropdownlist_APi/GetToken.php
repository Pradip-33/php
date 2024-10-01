<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.universal-tutorial.com/api/getaccesstoken");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Accept: application/json",
    "api-token:CeONZ6ypWERXb_1agFS58OL6uEUtVsw8dOSgXzwFDzFUuxSTITtT6b8T7wJvkVVhmrc", 
    "user-email: pfsuthar33@gmail.com"     
));

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$tokenData = json_decode($response, true);
echo $tokenData['auth_token'];
?>