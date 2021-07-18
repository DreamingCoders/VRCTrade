<?php
//bar

/*
// create a new cURL resource
$ch = curl_init();
// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://www.bprewritten.net/api/foobar.php");
curl_setopt($ch, CURLOPT_HEADER, 0);
// grab URL and pass it to the browser
curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
*/

$get_data = callAPI('GET', 'https://bprewritten.net/api/foobar.php, false);
$response = json_decode($get_data, true);
$errors = $response['response']['errors'];
$data = $response['response']['data'][0];
?>
