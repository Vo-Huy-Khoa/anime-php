<?php

$sql = "select * from videos";
$list_video = Database::db_get_list($sql);

$sql = "select * from animes";
$list_anime = Database::db_get_list($sql);

?>


<!-- Blank Start -->
<div class="container pt-4 px-4">
    <div class="row vh-100 bg-light rounded mx-0">
        <div class="col-md-12">
            <h3>Video List</h3>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Anime</th>
                        <th>Sort</th>
                        <th>Video</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_video as $video) : ?>
                        <tr>
                            <td>
                                <?php foreach ($list_anime as $anime) :
                                    if ($anime['id'] == $video['anime_id']) {
                                        echo $anime['title'];
                                    }
                                endforeach;
                                ?>
                            </td>
                            <td><?php echo $video['sort']; ?></td>
                            <td><iframe width="300" height="200" src="<?php echo $video['video']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                            <td><a href="<?php echo Helper::get_url('?c=video-add') ?>">Add</a>&nbsp;&nbsp;
                                <a href="<?php echo Helper::get_url('?c=video-edit&id=' . $video['id']) ?>">Edit</a>&nbsp;&nbsp;
                                <a href="<?php echo Helper::get_url('?c=video-delete&id=' . $video['id']) ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- Blank End -->