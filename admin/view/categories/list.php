

<?php

    $sql = "select * from categories";
    $list_categories = Database::db_get_list($sql);

?>




            <!-- Blank Start -->
            <div class="container pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-12">
                        <h3>Categories List</h3>

                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($list_categories as $categories): ?>
                                <tr>
                                    <td><?php echo $categories['name'] ;?></td>
                                    <td><a href="<?php echo Helper::get_url('?c=categories-add') ?>">Add</a>&nbsp;&nbsp;
                                    <a href="<?php echo Helper::get_url('?c=categories-edit&id='.$categories['id']) ?>">Edit</a>&nbsp;&nbsp;
                                    <a href="<?php echo Helper::get_url('?c=categories-delete&id='.$categories['id']) ?>">Delete</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- Blank End -->
