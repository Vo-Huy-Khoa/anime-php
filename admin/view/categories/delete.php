<?php

   $id = filter_input(INPUT_GET,'id'); 

   
    $sql = "delete from categories where id = :id ";
    $params = [

        'id' => $id
    ];

    if (Database::db_execute($sql, $params)) {
        Helper::redirect_js(Helper::get_url('?c=categories-list'));

    }
  

   
?>