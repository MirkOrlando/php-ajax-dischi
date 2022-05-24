<?php
//var_dump(file_get_contents("https://flynn.boolean.careers/exercises/api/array/music"));
$api_call = json_decode(file_get_contents("https://flynn.boolean.careers/exercises/api/array/music"), true);
//var_dump($api_call);
$albums = $api_call['response'];
//var_dump($albums);
$genres = [];
foreach ($albums as $album) {
    //var_dump($genres);
    if (!in_array($album['genre'], $genres)) {
        //$genres = $album['genre'];
        array_push($genres, $album['genre']);
    }
}
//var_dump($genres);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

echo json_encode($genres);
