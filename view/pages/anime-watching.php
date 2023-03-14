<?php include('/controllers/user/anime-watching.php') ?>
 <!-- Anime Section Begin -->
 <section class="anime-details spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-9">
                 <div class="anime__video__player">
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
     </div>
 </section>
 <!-- Anime Section End -->