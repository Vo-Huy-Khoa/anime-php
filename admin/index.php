<?php
include_once('../model/helper.php');

$db = new Database();

   /*Form Authentication*/
   if(!Role::is_admin()){
      Helper::redirect(Helper::get_url('login.php'));
   }

   
   $view = filter_input(INPUT_GET,'v');
   $action = filter_input(INPUT_GET,'a');


   if (empty($view) || empty($action)) {
       $view = 'common';
       $action = 'home';
   }

   $path ='view/' . $view . '/' . $action . '.php';

   if (file_exists($path)) {
       include_once($path);
   }else{
       header('Location:404.php');
   }

?>
    <base href="<?php echo Helper::get_url('admin/');  ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <!-- data table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <style>
        <?php include '../public/admin_asset/css/style.css'; ?>
        <?php include '../public/admin_asset/css/bootstrap.min.css'; ?>
        <?php include '../public/admin_asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'; ?>
        <?php include '../public/admin_asset/lib/owlcarousel/assets/owl.carousel.min.css'; ?>
        <?php include '../public/admin_asset/img/favicon.ico'; ?>
    </style>

    


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="../public/admin_asset/lib/chart/chart.min.js"></script> -->
    <!-- <script src="../public/admin_asset/lib/easing/easing.min.js"></script> -->
    <!-- <script src="../public/admin_asset/lib/waypoints/waypoints.min.js"></script> -->
    <!-- <script src="../public/admin_asset/lib/owlcarousel/owl.carousel.min.js"></script> -->
    <!-- <script src="../public/admin_asset/lib/tempusdominus/js/moment.min.js"></script> -->
    <!-- <script src="../public/admin_asset/lib/tempusdominus/js/moment-timezone.min.js"></script> -->
    <!-- <script src="../public/admin_asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script> -->
    <!-- Template Javascript -->
    <!-- <script src="../public/admin_asset/js/main.js"></script> -->

    <!-- datatable -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <script >
        <?php include '../public/admin_asset/lib/chart/chart.min.js'; ?>
        <?php include '../public/admin_asset/lib/easing/easing.min.js'; ?>
        <?php include '../public/admin_asset/lib/waypoints/waypoints.min.js'; ?>
        <?php include '../public/admin_asset/lib/owlcarousel/owl.carousel.min.js'; ?>
        <?php include '../public/admin_asset/lib/tempusdominus/js/moment.min.js'; ?>
        <?php include '../public/admin_asset/lib/tempusdominus/js/moment-timezone.min.js'; ?>
        <?php include '../public/admin_asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'; ?>
        <?php include '../public/admin_asset/js/main.js'; ?>
    </script>

<!-- datatable -->
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>


<script>
  /*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});
/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );
input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script>