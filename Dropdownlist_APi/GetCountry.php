<?php

// Fetch the access token from the local endpoint or file
$access_token = file_get_contents("http://localhost/PHP/Dropdownlist_APi/Form.php");

if ($access_token === false) {
    die("Failed to retrieve access token.");
}

// Initialize cURL session
$ch = curl_init();

// Set cURL options for country list
curl_setopt($ch, CURLOPT_URL, "https://www.universal-tutorial.com/api/countries");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer $access_token",
    "Accept: application/json"
));

// Execute the cURL request
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($http_code === 200) {
        // Return response to the frontend
        echo $response;
    } else {
        echo "Failed to fetch data. HTTP status code: " . $http_code;
    }
}

// Close cURL session
curl_close($ch);

?>
