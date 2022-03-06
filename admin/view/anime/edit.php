 <?php

    $id = filter_input(INPUT_GET, 'id');
    $sql_anime = "select * from animes where id = :id ";
    $param_anime = [
        "id" => $id
    ];

    $anime = Database::db_get_row($sql_anime, $param_anime);

    $sql_day = "select * from days";
    $list_day = Database::db_get_list($sql_day);

    $sql_categories = "select * from categories";
    $list_categories = Database::db_get_list($sql_categories);

    if (filter_input(INPUT_POST, 'action') == 'edit') {

        $category_id = filter_input(INPUT_POST, 'category_id');
        $title = filter_input(INPUT_POST, 'title');
        $imgfile = "";
        $inputfile = "files";
        if (!filter_input(INPUT_POST, 'files'))
            $image = "";
        if (Helper::upload_file($inputfile, $imgfile)) {
            // unlink("../uploads/". $anime['image']);
            $image = $imgfile;

            
        }

        //image
        // if (filter_input(INPUT_POST,'files')) {
        //     $file = filter_input(INPUT_POST,'files');
        //     $late = $file->getClientOriginalExtension();//get format file
        //     $name = $file->getClientOriginalName();//get name file
        //     $image = Str::random(4)."_".$name;
        //     while (file_exists("uploads/".$image)) {
        //         $image = Str::random(4)."_".$name;
        //     }
        //     // add image
        //     $file->move("uploads/",$image);
        //     //delete image old
        //     unlink("uploads/".$anime['image']);

            
        // }


        $time = filter_input(INPUT_POST, 'time');
        $day = filter_input(INPUT_POST, 'day');


        $sql = "update animes set category_id = :category_id, title = :title,
                 image = :image, time = :time, day = :day where id = :id ";
        $params = [
            'id' => $id,
            "category_id" => $category_id,
            'title' => $title,
            'image' => $image,
            'time' => $time,
            'day' => $day
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
                 <h6 class="mb-4">Anime Edit</h6>
                 <form action="" method="POST" enctype="multipart/form-data">
                     <div class="mb-3">
                         <label for="category_id" class="form-label">Categories Name</label><br>
                         <select class="custom-select tm-select-accounts" id="category_id" name="category_id">
                             <?php foreach ($list_categories as $categories) : ?>
                                 <option <?php if ($anime['category_id'] == $categories['id']) {
                                                echo "selected";
                                            }
                                            ?> value="<?php echo $categories['id'] ?>"><?php echo $categories['name'] ?>
                                 </option>
                             <?php endforeach; ?>
                         </select>
                     </div>
                     <div class="mb-3">
                         <label for="title" class="form-label">Title</label>
                         <input type="text" class="form-control" id="title" name="title" value="<?php echo $anime['title'] ?>">
                     </div>

                     <div class="mb-3">
                         <label for="time" class="form-label">Time</label>
                         <input type="text" class="form-control" id="time" name="time" value="<?php echo $anime['time'] ?>">
                     </div>

                     <div class="mb-3">
                         <label for="day" class="form-label">Day</label>
                         <br>
                         <select name="day" id="day">
                             <?php foreach ($list_day as $day) : ?>
                                 <option <?php
                                            if ($day['id'] == $anime['day']) {
                                                echo "selected";
                                            }
                                         ?> value="<?php echo $day['id']; ?>"><?php echo $day['name']; ?></option>
                             <?php endforeach; ?>
                         </select><br>
                     </div>

                     <div class="mb-3">
                         <!-- Uploaded image area-->
                         <div class="image-area mt-4"><img style="height: 300px; width:300px; border-radius:50px;" id="imageResult" src="../uploads/<?php echo $anime['image'] ?>" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                     </div>
                     <div class="mb-3">
                         <!-- Upload image input-->
                         <div class="input-group  rounded-pill bg-white shadow-sm">
                             <input id="upload" name="files" type="file" value="<?php echo $anime['image'] ?>" onchange="readURL(this);" class="form-control border-0">
                             <div class="input-group-append">
                                 <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                             </div>
                         </div>
                     </div>

                     <input type="hidden" name="action" value="edit">
                     <button type="submit" class="btn btn-primary">edit</button>
                 </form>
             </div>
         </div>


     </div>
 </div>
 <!-- Form End -->