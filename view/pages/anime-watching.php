<?php

$id = filter_input(INPUT_GET, 'video_id');
$anime_id = filter_input(INPUT_GET, 'anime_id');
$sort = filter_input(INPUT_GET, 'sort');

// row video
if (!empty($id)) {
    $sql = "select * from videos where id = :id";
    $params = [
        'id' => $id
    ];
    $videos = Database::db_get_row($sql, $params);
}

// sort item
if (!empty($anime_id && $sort)) {
    $sql = "select * from videos where anime_id = :anime_id and sort = :sort";
    $params = [
        'anime_id' => $anime_id,
        'sort' => $sort

    ];
    $videos = Database::db_get_row($sql, $params);
}



// list video
$sql_anime = "select * from videos where anime_id = :anime_id";
$param_anime = [
    'anime_id' => $anime_id
];
$list_video = Database::db_get_list_condition($sql_anime, $param_anime);

// oder by
$sql_oderby = "select * from animes ORDER BY view DESC";
$list_oderby = Database::db_get_list($sql_oderby);

?>


 <!-- Anime Section Begin -->
 <section class="anime-details spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-9">
                 <div class="anime__video__player">
                     <!-- <video id="player" playsinline controls data-poster="./videos/anime-watch.jpg">
                         <source src="videos/1.mp4" type="video/mp4" />
                         
                         <track kind="captions" label="English captions" src="#" srclang="en" default />
                     </video> -->
                     <iframe width="98%" height="500px" src="<?php echo $videos['video'] ;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 </div>
                 <div class="anime__details__episodes">
                     <div class="section-title">
                         <h5>full hd</h5>
                     </div>
                     <?php foreach($list_video as $video): ?>
                                <a href="<?php echo Helper::get_url('?c=anime-watching&video_id='.$video['id'].'&anime_id='.$anime_id) ?>"><?php echo $video['sort'] ?></a>
                    <?php endforeach; ?>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <!-- <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Xem nhiều</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                    data-setbg="img/sidebar/tv-1.jpg">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="anime-details.html">Boruto: Naruto next generations</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix month week"
                                    data-setbg="img/sidebar/tv-2.jpg">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="anime-details.html">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix week years"
                                    data-setbg="img/sidebar/tv-3.jpg">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="anime-details.html">Sword art online alicization war of underworld</a>
                                    </h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix years month"
                                    data-setbg="img/sidebar/tv-4.jpg">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="anime-details.html">Fate/stay night: Heaven's Feel I. presage
                                            flower</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix day"
                                    data-setbg="img/sidebar/tv-5.jpg">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="anime-details.html">Fate stay night unlimited blade works</a></h5>
                                </div>
                            </div>
                        </div> -->
                        <div class="product__sidebar__comment">
                            <div class="section-title">
                                <h5>Xem nhiều</h5>
                            </div>
                            <?php foreach($list_oderby as $oderby): ?>
                                <div class="product__sidebar__comment__item">
                                    <div class="product__sidebar__comment__item__pic">
                                        <img width="70px" height="90px" src="uploads/<?php echo $oderby['image'] ?>" alt="">
                                    </div>
                                    <div class="product__sidebar__comment__item__text">
                                        <ul>
                                            <!-- <li>Active</li>
                                            <li>Movie</li> -->
                                        </ul>
                                        <h5><a href="<?php echo Helper::get_url('?c=anime-details&anime_id='.$oderby['id']) ?>"><?php echo $oderby['title'] ?></a></h5>
                                        <!-- <span><i class="fa fa-eye"></i> 19.141 Viewes</span> -->
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
         </div>
         <!-- <div class="row">
                <div class="col-lg-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Reviews</h5>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="img/anime/review-1.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                "demons" LOL</p>
                            </div>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="img/anime/review-2.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                <p>Finally it came out ages ago</p>
                            </div>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="img/anime/review-3.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                <p>Where is the episode 15 ? Slow update! Tch</p>
                            </div>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="img/anime/review-4.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                "demons" LOL</p>
                            </div>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="img/anime/review-5.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                <p>Finally it came out ages ago</p>
                            </div>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="img/anime/review-6.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                <p>Where is the episode 15 ? Slow update! Tch</p>
                            </div>
                        </div>
                    </div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Your Comment</h5>
                        </div>
                        <form action="#">
                            <textarea placeholder="Your Comment"></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                        </form>
                    </div>
                </div>
            </div> -->
     </div>
 </section>
 <!-- Anime Section End -->