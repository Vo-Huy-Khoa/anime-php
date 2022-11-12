<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoạt Hình Anime Hay</title>
    <!-- Css Styles -->
    <link rel="stylesheet" href="public/user/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/user/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/user/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/user/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="public/user/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/user/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/user/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/user/css/style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    
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

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include_once("layout/header.php") ?>
    <!-- Header End -->

    <!-- Header Section Begin -->
        <?php include_once("layout/navbar.php") ?>
    <!-- Header End -->

    <!-- Main Section Begin -->
    <?php include_once("layout/main.php") ?>
    <!-- Main Section End -->

    <!-- Footer Section Begin -->
    <?php include_once("layout/footer.php") ?>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
        <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

</body>

</html>