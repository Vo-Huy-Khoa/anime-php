<?php
include_once('model/helper.php');
$db = new Database();


$view = filter_input(INPUT_GET, 'v');
$action = filter_input(INPUT_GET, 'a');


if (empty($view) || empty($action)) {
    $view = 'common';
    $action = 'home';
}

$path = 'view/' . $view . '/' . $action . '.php';

if (file_exists($path)) {
    include_once($path);
} else {
    header('Location:404.php');
}

?>

<base href="<?php echo Helper::get_url(''); ?>">





<!-- Js Plugins -->
<script src="public/user/js/jquery-3.3.1.min.js"></script>
<script src="public/user/js/bootstrap.min.js"></script>
<script src="public/user/js/player.js"></script>
<script src="public/user/js/jquery.nice-select.min.js"></script>
<script src="public/user/js/mixitup.min.js"></script>
<script src="public/user/js/jquery.slicknav.js"></script>
<script src="public/user/js/owl.carousel.min.js"></script>
<script src="public/user/js/main.js"></script>