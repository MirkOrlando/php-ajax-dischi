<?php
//var_dump(file_get_contents("https://flynn.boolean.careers/exercises/api/array/music"));
$api_call = json_decode(file_get_contents("https://flynn.boolean.careers/exercises/api/array/music"), true);
//var_dump($api_call);
$albums = $api_call['response'];
//var_dump($albums);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

echo json_encode($albums);
