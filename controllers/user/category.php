<?php
$id = filter_input(INPUT_GET, 'categories_id');

// search categories
if (!empty($id)) {
    $sql = "select * from animes where category_id = '$id'";
    $list_anime = Database::db_get_list($sql);
}


// name categories
if (!empty($id)) {
    $sql_name = "select name from categories where id = :id";
    $param_name = [
        'id' => $id
    ];

    $name = Database::db_get_row($sql_name, $param_name);
}


// oderby anime
$sql_oderby = "select * from animes ORDER BY view DESC";
$list_oderby = Database::db_get_list($sql_oderby);


// search 
$value = filter_input(INPUT_GET, 'value');
if (!empty($value)) {
    $sql_search = "select * from animes where title like '%$value%' ";
    $anime_search = Database::db_get_list($sql_search);
}

// categories list
if (filter_input(INPUT_GET, 'action') == 'list') {
    $sql_categories = "select * from animes ";
    $list_categories = Database::db_get_list($sql_categories);
}


?>