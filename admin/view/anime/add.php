 <?php


    $sql_day = "select * from days";
    $list_day = Database::db_get_list($sql_day);

    $sql_categories = "select * from categories";
    $list_categories = Database::db_get_list($sql_categories);

    if (filter_input(INPUT_POST, 'action') == 'add') {

        $category_id = filter_input(INPUT_POST, 'category_id');
        $title = filter_input(INPUT_POST, 'title');

        $imgfile = "";
        $inputfile = "files";
        if (!filter_input(INPUT_POST, 'files'))
            $image = "";
        if (Helper::upload_file($inputfile, $imgfile)) {
            $image = $imgfile;
        }
        $time = filter_input(INPUT_POST, 'time');
        $day = filter_input(INPUT_POST, 'day');

        $sql  = "insert into animes(category_id, title, image, time, day, view) values(:category_id, :title, :image, :time, :day, :view)";
        $params = [
            "category_id" => $category_id,
            'title' => $title,
            'image' => $image,
            'time' => $time,
            'day' => $day,
            'view' => 0
        ];

        if (Database::db_execute($sql, $params)) {
            Helper::redirect_js(Helper::get_url('?c=anime-list'));
        }

    }



    ?>


 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
     <div class="row g-4">
         <div class="col-sm-12 col-xl-12">
             <div class="bg-light rounded h-100 p-4">
                 <h6 class="mb-4">Anime Add</h6>
                 <form action="" method="post" enctype="multipart/form-data">
                     <div class="mb-3">
                         <label for="category_id" class="form-label">Categories Name</label>
                         <br>
                         <select name="category_id" id="category_id">
                             <?php foreach ($list_categories as $categories) : ?>
                                 <option selected value="<?php echo $categories['id']; ?>"><?php echo $categories['name']; ?></option>
                             <?php endforeach; ?>
                         </select><br>
                     </div>
                     <div class="mb-3">
                         <label for="title" class="form-label">Title</label>
                         <input type="text" class="form-control" id="title" name="title">
                     </div>
                     <div class="mb-3">
                         <label for="time" class="form-label">Time</label>
                         <input type="text" class="form-control" id="time" name="time">
                     </div>
                     <div class="mb-3">
                         <label for="day" class="form-label">Day</label>
                         <br>
                         <select name="day" id="day">
                             <?php foreach ($list_day as $day) : ?>
                                 <option selected value="<?php echo $day['id']; ?>"><?php echo $day['name']; ?></option>
                             <?php endforeach; ?>
                         </select><br>
                     </div>
                     <div class="mb-3">
                         <!-- Uploaded image area-->
                         <div class="image-area mt-4"><img style="height: 300px; width:300px; border-radius:50px;" id="imageResult" src="" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                     </div>
                     <div class="mb-3">
                         <!-- Upload image input-->
                         <div class="input-group  rounded-pill bg-white shadow-sm">
                             <input id="upload" name="files" type="file" onchange="readURL(this);" class="form-control border-0">
                             <div class="input-group-append">
                                 <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                             </div>
                         </div>
                     </div>
                     <input type="hidden" name="action" value="add">
                     <button type="submit" class="btn btn-primary">Add</button>
                 </form>
             </div>
         </div>


     </div>
 </div>
 <!-- Form End -->