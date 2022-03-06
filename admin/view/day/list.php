<?php

$sql = "select * from days";
$list_day = Database::db_get_list($sql);

?>




<!-- Blank Start -->
<div class="container pt-4 px-4">
    <div class="row vh-100 bg-light rounded mx-0">
        <div class="col-md-12">
            <h3>Day List</h3>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_day as $day) : ?>
                        <tr>
                            <td><?php echo $day['name']; ?></td>
                            <td><a href="<?php echo Helper::get_url('?c=day-add') ?>">Add</a>&nbsp;&nbsp;
                                <a href="<?php echo Helper::get_url('?c=day-edit&id=' . $day['id']) ?>">Edit</a>&nbsp;&nbsp;
                                <a href="<?php echo Helper::get_url('?c=day-delete&id=' . $day['id']) ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- Blank End -->