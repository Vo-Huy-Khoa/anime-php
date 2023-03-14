<?php include('/controllers/user/category.php') ?>

<!-- Product Section Begin -->
<section class="product-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="product__page__content">
                    <div class="product__page__title">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6">
                                <div class="section-title">
                                    <?php if (!empty($id)) { ?>
                                        <h4><?php echo $name[0] ?></h4>
                                    <?php } ?>

                                    <?php if (!empty($value)) { ?>
                                        <h4>Tìm Kiếm: <?php echo $value ?></h4>
                                    <?php } ?>
                                    <?php if (empty($id) && empty($value) && !filter_input(INPUT_GET, 'action') == 'list') { ?>
                                        <h4>Mới Nhất</h4>
                                    <?php } ?>

                                    <?php if (filter_input(INPUT_GET, 'action') == 'list') { ?>
                                        <h4>Tất Cả</h4>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="product__page__filter">
                                        <p>Order by:</p>
                                        <select>
                                            <option value="">A-Z</option>
                                            <option value="">1-10</option>
                                            <option value="">10-50</option>
                                        </select>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                    <div class="row">

                        <!-- search categories navbar -->
                        <?php
                        if (!empty($list_anime)) { ?>

                            <?php foreach ($list_anime as $anime) : ?>
                                <?php
                                $sql_max = "select max(sort) from videos where anime_id = :id";
                                $param_max = [
                                    'id' => $anime['id']
                                ];
                                $anime_max = Database::db_get_row($sql_max, $param_max);
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-6 anime-details">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="uploads/<?php echo $anime['image'] ?>">
                                            <div class="ep">Tập <?php echo $anime_max[0] ?></div>
                                            <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <!-- <li>Active</li>
                                                <li>Movie</li> -->
                                            </ul>
                                            <h5><a href="<?php echo Helper::get_url('?c=anime-details&anime_id=' . $anime['id']) ?>"><?php echo $anime['title'] ?></a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        <?php   } ?>

                        <!-- search input value -->
                        <?php
                        if (!empty($anime_search)) { ?>

                            <?php foreach ($anime_search as $anime) : ?>
                                <?php
                                $sql_max = "select max(sort) from videos where anime_id = :id";
                                $param_max = [
                                    'id' => $anime['id']
                                ];
                                $anime_max = Database::db_get_row($sql_max, $param_max);
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-6 anime-details">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="uploads/<?php echo $anime['image'] ?>">
                                            <div class="ep"><?php echo $anime_max[0] ?></div>
                                            <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <!-- <li>Active</li>
                                                <li>Movie</li> -->
                                            </ul>
                                            <h5><a href="<?php echo Helper::get_url('?c=anime-details&anime_id=' . $anime['id']) ?>"><?php echo $anime['title'] ?></a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        <?php   } ?>


                        <!-- list categories -->
                        <?php
                        if (filter_input(INPUT_GET, 'action') == 'list') { ?>

                            <?php foreach ($list_categories as $anime) : ?>
                                <?php
                                $sql_max = "select max(sort) from videos where anime_id = :id";
                                $param_max = [
                                    'id' => $anime['id']
                                ];
                                $anime_max = Database::db_get_row($sql_max, $param_max);
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-6 anime-details">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="uploads/<?php echo $anime['image'] ?>">
                                            <div class="ep"><?php echo $anime_max[0] ?></div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>

                                            </ul>
                                            <h5><a href="<?php echo Helper::get_url('?c=anime-details&anime_id=' . $anime['id']) ?>"><?php echo $anime['title'] ?></a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        <?php   } ?>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
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
                        <?php foreach ($list_oderby as $oderby) : ?>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img width="70px" height="90px" src="uploads/<?php echo $oderby['image'] ?>" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <!-- <li>Active</li>
                                            <li>Movie</li> -->
                                    </ul>
                                    <h5><a href="<?php echo Helper::get_url('?c=anime-details&anime_id=' . $oderby['id']) ?>"><?php echo $oderby['title'] ?></a></h5>
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
<!-- Product Section End -->