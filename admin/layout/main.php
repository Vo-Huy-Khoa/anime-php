<?php


$content = filter_input(INPUT_GET,'c');

if (!empty($content)) {
    switch ($content) {
         case 'categories-list':
            include('view/categories/list.php');
            break;
         case 'categories-add':
            include('view/categories/add.php');
            break; 
         case 'categories-edit':
            include('view/categories/edit.php');
            break; 
         case 'categories-delete':
            include('view/categories/delete.php');
            break; 
         case 'anime-list':
            include('view/anime/list.php');
            break;
         case 'anime-add':
            include('view/anime/add.php');
            break; 
         case 'anime-edit':
            include('view/anime/edit.php');
            break;
         case 'anime-delete':
            include('view/anime/delete.php');
            break;  
         case 'video-list':
            include('view/video/list.php');
            break;
         case 'video-add':
            include('view/video/add.php');
            break; 
         case 'video-edit':
            include('view/video/edit.php');
            break;
         case 'video-delete':
            include('view/video/delete.php');
            break;
         case 'day-list':
            include('view/day/list.php');
            break;
         case 'day-add':
            include('view/day/add.php');
            break; 
         case 'day-edit':
            include('view/day/edit.php');
            break;
         case 'day-delete':
            include('view/day/delete.php');
            break; 
         case 'login':
            include('view/common/login.php');
            break; 
    }

}else{
   include('view/dashboard.php');
}


?>