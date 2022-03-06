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

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
    a:hover {
        color: red !important;
    }
    @media only screen {
        .col-lg-8 form {
            margin-top: 36px;
        }
    }
    /* Tablet Device = 768px */
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .col-lg-8 form {
            margin-top: -65px;
            width: 60%;
            margin-left: 130px;
        }
    }
    /* Wide Mobile = 480px */
    @media only screen and (max-width: 767px) {
        .col-lg-8 form {
            margin-top: -12px;
            width: 90%;
            margin-left: 15px;
        }
        .anime-details {
            margin-top: -50px !important;
            width: 50% !important;
        }
        .product__item__pic {
            height: 250px !important;
        }
        .hero__items {
            height: 250px !important;
        }
    }
    /* Small Device = 320px */
    @media only screen and (max-width: 479px) {
        .hero__items {
            height: 50px !important;
        }
    }
</style>

<!-- Css Styles -->
<link rel="stylesheet" href="public/user/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="public/user/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="public/user/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="public/user/css/plyr.css" type="text/css">
<link rel="stylesheet" href="public/user/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="public/user/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="public/user/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="public/user/css/style.css" type="text/css">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

<!-- Js Plugins -->
<script src="public/user/js/jquery-3.3.1.min.js"></script>
<script src="public/user/js/bootstrap.min.js"></script>
<script src="public/user/js/player.js"></script>
<script src="public/user/js/jquery.nice-select.min.js"></script>
<script src="public/user/js/mixitup.min.js"></script>
<script src="public/user/js/jquery.slicknav.js"></script>
<script src="public/user/js/owl.carousel.min.js"></script>
<script src="public/user/js/main.js"></script>