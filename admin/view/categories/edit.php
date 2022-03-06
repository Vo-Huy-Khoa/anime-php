<?php


    $id = filter_input(INPUT_GET,'id'); 

    $sql_categories = "select * from categories where id = :id ";
    $param = [
        'id' => $id
    ];


    $categories = Database::db_get_row($sql_categories,$param);

    if (filter_input(INPUT_POST,'action') == 'edit') {

        $name = filter_input(INPUT_POST,'name');


        $sql_update = "update categories set name = :name where id = :id ";
        $params = [
            'id' => $id,
            'name' => $name
        ];
        if (!empty($id) &&Database::db_execute($sql_update, $params)){
            Helper::redirect_js(Helper::get_url('?c=categories-list'));
        }
    }




?>
 
 
 
 
 <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Categories Edit</h6>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $categories['name'] ?>">
                                </div>
                                <input type="hidden" name="action" value="edit">
                                <button type="submit" class="btn btn-primary">EDIT</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
            <!-- Form End -->