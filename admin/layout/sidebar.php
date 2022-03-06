        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="<?php echo Helper::get_url("index.php"); ?>" class="navbar-brand mx-4 mb-3">
                    
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Dashboard</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="public/admin_asset/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Huy Khoa</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo Helper::get_url("index.php"); ?>" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="<?php echo Helper::get_url("?c=categories-list"); ?>" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Categories</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo  Helper::get_url("?c=categories-add");  ?>" class="dropdown-item">Add</a>
                            <a href="<?php echo  Helper::get_url("?c=categories-list");  ?>" class="dropdown-item">List</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a <?php echo  Helper::get_url("?c=anime-list");  ?> class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Anime</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo  Helper::get_url("?c=anime-add");  ?>" class="dropdown-item">Add</a>
                            <a href="<?php echo  Helper::get_url("?c=anime-list");  ?>" class="dropdown-item">List</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="<?php echo  Helper::get_url("?c=video-list");  ?>" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Video</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo  Helper::get_url("?c=video-add");  ?>" class="dropdown-item">Add</a>
                            <a href="<?php echo  Helper::get_url("?c=video-list");  ?>" class="dropdown-item">List</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="<?php echo  Helper::get_url("?c=day-list");  ?>" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Day</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo  Helper::get_url("?c=day-add");  ?>" class="dropdown-item">Add</a>
                            <a href="<?php echo  Helper::get_url("?c=day-list");  ?>" class="dropdown-item">List</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Page</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        