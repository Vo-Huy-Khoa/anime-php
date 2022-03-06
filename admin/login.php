<?php 
include_once('../model/helper.php');

$db = new Database();

if(Role::is_admin())
   Helper::redirect(Helper::get_url('admin/index.php'));

if(filter_input(INPUT_POST,'action') == 'login')
{
    $email = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');
    if(!empty($email) && !empty($password ))
    {
       $sql = "select * from users where email=:email"; 
       $params = ["email"=>$email];
       $user = Database::db_get_row($sql,$params);
       
       if(empty($user))
         $error['email'] = 'email Không tồn tại !';
       else
          {
            if($user['password'] != $password)
            {
                $error['password'] = 'Mật khẩu bạn nhập không đúng';
            }
          }

       if(empty($error) && $user['type'] == 1)
       {
           Role::set_logged($user['email'],$user['type']);
           Helper::redirect(Helper::get_url('index.php'));
       }     
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ADMIN - LOGIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <base href="<?php echo Helper::get_url('index.php');  ?>">
    <!-- Favicon -->
    <link href="../public/admin_asset/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../public/admin_asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../public/admin_asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../public/admin_asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../public/admin_asset/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="#" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <form action="" method="POST">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                <label for="password">Password</label>
                            </div>

                            <input type="hidden" name="action" value="login">
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>  
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/admin_asset/lib/chart/chart.min.js"></script>
    <script src="../public/admin_asset/lib/easing/easing.min.js"></script>
    <script src="../public/admin_asset/lib/waypoints/waypoints.min.js"></script>
    <script src="../public/admin_asset/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../public/admin_asset/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../public/admin_asset/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../public/admin_asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../public/admin_asset/js/main.js"></script>
</body>

</html>