 <?php

    $id = filter_input(INPUT_GET, 'anime_id');

    // categories
    $sql_categories = "select * from categories";
    $list_categories = Database::db_get_list($sql);

    // row anime
    $sql = "select * from animes where id = :id";
    $params = [
        'id' => $id
    ];
    $anime = Database::db_get_row($sql, $params);

    // list video
    $sql_video = "select * from videos where anime_id = :id";
    $list_video = Database::db_get_list_condition($sql_video, $params);

    // view
    $sql_view = "UPDATE animes SET view = view + 1 WHERE id = :id";
    Database::db_execute($sql_view,$params);


    // max sort
    $sql_max = "select max(sort) from videos where anime_id = :id";
    $param_max = [
        'id' => $id
    ];
    $anime_max = Database::db_get_row($sql_max, $param_max);

?>


 <!-- Anime Section Begin -->
 <section class="anime-details spad">
     <div class="container">
         <div class="anime__details__content">
             <div class="row">
                 <div class="col-lg-3">
                     <div class="anime__details__pic set-bg" data-setbg="uploads/<?php echo $anime['image'] ?>">
                         <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                     </div>
                 </div>
                 <div class="col-lg-9">
                     <div class="anime__details__text">
                         <div class="anime__details__title">
                             <h3><?php echo $anime['title'] ?></h3>
                         </div>
                         <!-- <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div> -->
                         <!-- <p>Every human inhabiting the world of Alcia is branded by a “Count” or a number written on
                             their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss,
                             never to be seen again. But her mother’s last words send Hina on a quest to find a
                             legendary hero from the Waste War - the fabled Ace!</p> -->
                         <div class="anime__details__widget">
                             <div class="row">
                                 <div class="col-lg-6 col-md-6">
                                     <ul>
                                         <li><span>Thời gian: </span><?php echo $anime['time'] ?></li>
                                         <li><span>Tập mới nhất: </span><?php echo $anime_max[0] ?></li>
                                         <li><span>Thể loại: </span>
                                             <?php foreach ($list_categories as $categories) :
                                                    if ($categories['id'] == $anime['category_id']) {
                                                        echo $categories['name'];
                                                    }
                                                endforeach;
                                                ?>
                                         </li>
                                     </ul>
                                 </div>
                                 <!-- <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Scores:</span> 7.31 / 1,515</li>
                                            <li><span>Rating:</span> 8.5 / 161 times</li>
                                            <li><span>Duration:</span> 24 min/ep</li>
                                            <li><span>Quality:</span> HD</li>
                                            <li><span>Views:</span> 131,541</li>
                                        </ul>
                                    </div> -->
                             </div>
                         </div>
                         <div class="anime__details__btn">
                             <!-- <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Follow</a> -->
                             <a href="<?php echo Helper::get_url('?c=anime-watching&anime_id='.$anime['id'].'&sort='.$anime_max[0]) ?>" class="watch-btn"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Anime Section Begin -->
         <section class="anime-details spad">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="anime__details__episodes">
                             <div class="section-title">
                                 <h5>full hd</h5>
                             </div>
                             <?php foreach($list_video as $video): ?>
                                <a href="<?php echo Helper::get_url('?c=anime-watching&video_id='.$video['id'].'&anime_id='.$anime['id']) ?>"><?php echo $video['sort'] ?></a>
                             <?php endforeach; ?>

                         </div>
                     </div>
                 </div>

             </div>
         </section>
         <!-- Anime Section End -->

         <!-- <div class="row">
                    <div class="col-lg-8 col-md-8">
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
                    <div class="col-lg-4 col-md-4">
                        <div class="anime__details__sidebar">
                            <div class="section-title">
                                <h5>you might like...</h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-1.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-2.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-3.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-4.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                            </div>
                        </div>
                    </div>
                </div> -->
     </div>
 </section>
 <!-- Anime Section End -->