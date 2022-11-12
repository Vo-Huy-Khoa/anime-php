<?php

$value = filter_input(INPUT_POST,'value');

if (filter_input(INPUT_POST,'action') == 'search') {
    Helper::redirect_js('http://animehay.c1.biz/?c=categories&value='.$value);
}



?>
   
   
   <!-- Header Section Begin -->
    <header style="height: 100px;" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div style="height: 100px; line-height: 100px; margin: 0px; padding: 0px; " class="header__logo">
                        <a href="http://animehay.c1.biz/">
                            <img src="../public/user/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="" method="post">
                        <div class="form-group">
                            <div style="margin-top: 30px"  id="group-search">
                                <input style="background-color:#33313a;" id="search" type="text" name="value" value=""   placeholder="Nhấn Enter để tìm kiếm...">
                                <input type="hidden" name="action" value="search">
                            </div>
                        </div>
                    </form>
                </div>
           
             <div class="col-lg-2 favote">
                   <div id="get-bookmark">
                           <i class="hl-bookmark"></i>
                           <span> Phim Yêu Thích</span><span class="count"></span>
                   </div>

            </div>
            <div id="mobile-menu-wrap"></div>


</div>

        </div>
    </header>
    
    <style>
    #search{
        width: 400px;
        height: 34px;
        padding: 8px;
        border-radius: 20px;
        border-color: #3e7aad00;
       color: #fff;
   }
   
   #group-search{
        display: flex;
        justify-content: space-around;

    }
    
    .favote{
          display: flex;
          align-items: center;
    }
    
    #get-bookmark{
      display: inline-block;
      line-height: 20px;
      padding: 6px 15px;
      border-radius: 20px;
      color: #fff;
      cursor: pointer;
      transition: .4s all;
      background: linear-gradient(to right, rgba(6, 52, 88, 0.5), rgba(28, 94, 148, 0.5));
    }
    
    #get-bookmark span{
       font-size: 1rem;
       font-weight: 400;
    }

    </style>
    <!-- Header End -->


    