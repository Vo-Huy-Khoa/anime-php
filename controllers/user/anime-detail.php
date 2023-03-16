<?php

$id = filter_input(INPUT_GET, 'anime_id');

// categories
$sql_categories = "select * from categories";
$list_categories = Database::db_get_list($sql);

// row anime
$sql = "select * from animes where id = :id";
$params = [
    'id' => $id
];
$anime = Database::db_get_row($sql, $params);

// list video
$sql_video = "select * from videos where anime_id = :id";
$list_video = Database::db_get_list_condition($sql_video, $params);

// view
$sql_view = "UPDATE animes SET view = view + 1 WHERE id = :id";
Database::db_execute($sql_view,$params);


// max sort
$sql_max = "select max(sort) from videos where anime_id = :id";
$param_max = [
    'id' => $id
];
$anime_max = Database::db_get_row($sql_max, $param_max);

?>