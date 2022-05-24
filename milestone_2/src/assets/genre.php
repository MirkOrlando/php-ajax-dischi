<?php
//var_dump(file_get_contents("https://flynn.boolean.careers/exercises/api/array/music"));
$api_call = json_decode(file_get_contents("https://flynn.boolean.careers/exercises/api/array/music"), true);
//var_dump($api_call);
$albums = $api_call['response'];
//var_dump($albums);
/* $genres = [];
foreach ($albums as $album) {
    //var_dump($genres);
    if (!in_array($album['genre'], $genres)) {
        //$genres = $album['genre'];
        array_push($genres, $album['genre']);
    }
} */

function filter_array_by_keyword($array, $property, $word)
{
    $new_array = [];
    foreach ($array as $item) {
        //var_dump($item);
        //var_dump($item[$property]);
        if ($word == '') {
            array_push($new_array, $item);
        } else {
            if ($item[$property] == $word) {
                array_push($new_array, $item);
            }
        }
    }
    return $new_array;
}
//var_dump(filter_array_by_keyword($albums, "genre", "Rock"));
$albums_filtered = filter_array_by_keyword($albums, "genre", $_GET['genre']);
//var_dump($genres);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

echo json_encode($albums_filtered);
