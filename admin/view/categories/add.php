<?php
    if (filter_input(INPUT_POST,'action') == 'add') {
        
        $name = filter_input(INPUT_POST,'name');

        $sql = "insert into categories(name) value( :name )";
        $params = [
            "name" => $name
        ];
        
        if (Database::db_execute($sql, $params)) {
            Helper::redirect_js(Helper::get_url('?c=categories-list'));
        }
    }
?>
<!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Categories Add</h6>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <input type="hidden" name="action" value="add">
                                <button type="submit" class="btn btn-primary">ADD</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
<!-- Form End -->