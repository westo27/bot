<?php
require 'config.php';
require 'planet.php';

generatePlanet();

$data['message'] = "Planet";
$data['fileUpload'] = true;
$data['src'] = new \CurlFile('pics_out/0.jpg', 'image/png', '0.jpg');

$data['access_token'] = $page_access_token;

$post_url = 'https://graph.facebook.com/'.$page_id.'/photos';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $post_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
var_export(curl_error($ch));
var_export($response);

curl_close ($ch);

