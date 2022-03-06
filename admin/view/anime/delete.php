<?php


   $id = filter_input(INPUT_GET,'id'); 
    $sql_anime = "select * from animes where id = :id";
    $param_anime = [
        'id' => $id
    ];

   $anime = Database::db_get_row($sql_anime,$param_anime);
    $sql = "delete from animes where id = :id ";
    $params = [
        'id' => $id
    ];

    if (Database::db_execute($sql, $params)) {
        unlink("../uploads/". $anime['image']);
        Helper::redirect_js(Helper::get_url('?c=anime-list'));
    }
  

   
?>