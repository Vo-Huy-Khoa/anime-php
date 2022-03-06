<?php
  $content = filter_input(INPUT_GET,'c');
  if(!empty($content))
  {
     switch($content)
     {
        case "categories":
            include_once("view/pages/categories.php");
         break;
        case "anime-details":
            include_once("view/pages/anime-details.php");
            break;
        case "anime-watching":
            include_once("view/pages/anime-watching.php");
            break;

     }
  }
  else
  {
     // Default load
     include_once("view/common/dashboard.php");
  }
      
?>