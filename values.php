<?php
//values

$get_data = callAPI('GET', 'https://example.net/api/foobar.php, false);
$response = json_decode($get_data, true);
$errors = $response['response']['errors'];
$data = $response['response']['data'][0];
?>
