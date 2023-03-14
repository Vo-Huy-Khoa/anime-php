<?php

$id = filter_input(INPUT_GET, 'video_id');
$anime_id = filter_input(INPUT_GET, 'anime_id');
$sort = filter_input(INPUT_GET, 'sort');

// row video
if (!empty($id)) {
    $sql = "select * from videos where id = :id";
    $params = [
        'id' => $id
    ];
    $videos = Database::db_get_row($sql, $params);
}

// sort item
if (!empty($anime_id && $sort)) {
    $sql = "select * from videos where anime_id = :anime_id and sort = :sort";
    $params = [
        'anime_id' => $anime_id,
        'sort' => $sort

    ];
    $videos = Database::db_get_row($sql, $params);
}



// list video
$sql_anime = "select * from videos where anime_id = :anime_id";
$param_anime = [
    'anime_id' => $anime_id
];
$list_video = Database::db_get_list_condition($sql_anime, $param_anime);

// oder by
$sql_oderby = "select * from animes ORDER BY view DESC";
$list_oderby = Database::db_get_list($sql_oderby);

?>