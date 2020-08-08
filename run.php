<?php
require 'config.php';

$data['message'] = "test 2";
$data['fileUpload'] = true;
$data['src'] = new \CurlFile('pics/big_boy.png', 'image/png', 'test.jpg');


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

