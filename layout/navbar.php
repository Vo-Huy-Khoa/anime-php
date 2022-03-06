<?php

$sql = "select * from categories ";

$list_categories = Database::db_get_list($sql);


?>
  
  <!-- navbar-start -->
    <section>
        <div class="container">
            <div class="row">
                <div style="background-color: #33313a;" class="col-lg-12">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <?php foreach($list_categories as $categories): ?>
                                <li><a href="<?php echo Helper::get_url('?c=categories&categories_id='.$categories['id']) ?>"><?php echo $categories['name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </section>
    <!-- navbar-end -->