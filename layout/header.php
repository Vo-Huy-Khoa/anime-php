<?php

$value = filter_input(INPUT_POST, 'value');

if (filter_input(INPUT_POST, 'action') == 'search') {
    Helper::redirect_js(Helper::get_url('?c=categories&value=' . $value));
}



?>


<!-- Header Section Begin -->
<header style="height: 100px;" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div style="height: 100px; line-height: 100px; margin: 0px; padding: 0px; " class="header__logo">
                    <a href="<?php echo Helper::get_url('index.php') ?>">
                        <img src="public/user/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <form action="" method="post">
                    <div class="input-group">
                        <input style=" background-color:#33313a" id="search" type="text" name="value" value="" class="form-control" placeholder="Nhập tên phim cần tìm...">
                        <input type="hidden" name="action" value="search">
                    </div>
                </form>
            </div>
            <div style="display:none" class="col-lg-2">
                <div style="height: 100px; line-height: 100px; margin: 0px; padding: 0px; " class="header__right">
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
                </div>
            </div>

        </div>
        <div id="mobile-menu-wrap"></div>




    </div>
</header>
<!-- Header End -->