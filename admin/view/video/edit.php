<?php

$id = filter_input(INPUT_GET, 'id');

$sql_video = "select * from videos where id = :id ";
$param_video = [
    'id' => $id
];


$video = Database::db_get_row($sql_video, $param_video);
$sql_anime = "select * from animes";
$list_anime = Database::db_get_list($sql_anime);

if (filter_input(INPUT_POST, 'action') == 'edit') {

    $anime_id = filter_input(INPUT_POST, 'anime_id');
    $sort = filter_input(INPUT_POST, 'sort');
    $video = filter_input(INPUT_POST, 'video');


    $sql = "update videos set anime_id = :anime_id, sort = :sort, video = :video where id = :id ";
    $params = [
        'id' => $id,
        'anime_id' => $anime_id,
        'sort' => $sort,
        'video' => $video
    ];
    var_dump($anime_id);
    if (Database::db_execute($sql, $params)) {
        Helper::redirect_js(Helper::get_url('?c=video-list'));
    }
}




?>


<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Video Edit</h6>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="anime_id" class="form-label">Anime Name</label> <br>
                        <select class="custom-select tm-select-accounts" name="anime_id">
                            <?php foreach ($list_anime as $anime) : ?>
                                <option  value="<?php echo $anime['id'] ;?>" <?php if ($video['anime_id'] == $anime['id']) {
                                            echo "selected";
                                        }
                                        ?> ><?php echo $anime['title'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select><br>
                        <br><div class="mb-3">
                            <label for="sort" class="form-label">sort</label>
                            <input type="text" class="form-control" id="sort" name="sort" value="<?php echo $video['sort'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="video" class="form-label">video</label>
                            <input type="text" class="form-control" id="video" name="video" value="<?php echo $video['video'] ?>">
                        </div>
                        <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                        <input type="hidden" name="action" value="edit">
                        <button type="submit" class="btn btn-primary">EDIT</button>
                </form>
            </div>
        </div>


    </div>
</div>
<!-- Form End -->