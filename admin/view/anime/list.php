
<?php


    $sql = "select * from animes";

    $list_anime = Database::db_get_list($sql);

    $sql_categories = "select * from categories";
    $list_categories = Database::db_get_list($sql_categories);

    $sql_day = "select * from days";
    $list_day = Database::db_get_list($sql_day);

?>



            <!-- Blank Start -->
            <div class="container pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-12">
                        <h3>Anime List</h3>

                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Categories</th>
                                    <th>Title</th>
                                    <!-- <th>Description</th> -->
                                    <th>Image</th>
                                    <th>Time</th>
                                    <th>View</th>
                                    <th>Day</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($list_anime as $anime): ?>
                                <tr>
                                    <td>
                                    
                                    <?php foreach($list_categories as $categories): 
                                                if($categories['id'] == $anime['category_id']){
                                                    echo $categories['name'];
                                                }
                                        endforeach;
                                    ?>

                                    </td>
                                    <td><?php echo $anime['title']; ?></td>
                                    <!-- <td><?php echo $anime['description']; ?></td> -->
                                    <td><img width="120px" height="200px" src="../../uploads/<?php echo $anime['image'] ?>" alt=""></td>
                                    <td><?php echo $anime['time']; ?></td>
                                    <td><?php echo $anime['view']; ?></td>
                                    <td>
                                    <?php foreach($list_day as $day): 
                                                if($day['id'] == $anime['day']){
                                                    echo $day['name'];
                                                }
                                        endforeach;
                                        ?>
                                    </td>
                                    <td><a href="<?php echo Helper::get_url('?c=anime-add') ?>">Add</a>&nbsp;&nbsp;
                                    <a href="<?php echo Helper::get_url('?c=anime-edit&id='.$anime['id']) ?>">Edit</a>&nbsp;&nbsp;
                                    <a href="<?php echo Helper::get_url('?c=anime-delete&id='.$anime['id']) ?>">Delete</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            
            </div>
            <!-- Blank End -->

