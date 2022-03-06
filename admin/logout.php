<?php 
   include_once('../model/helper.php');
  Role::set_logout();
  Helper::redirect(Helper::get_url('login.php'));
?>