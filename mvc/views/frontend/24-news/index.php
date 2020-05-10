<?php
// require_once 'common.php';

?>
<?php require_once'header.php'; ?>
<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
       <?php 
       foreach ($posts_trending as $trending) {?>
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height"><img src="/Project/mvc/<?php echo $trending['thumbnail'] ?>" alt="img"/>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $trending['created_at'] ?>
                    </a></div>
                    <div class=""><a href="index.php?mod=home&act=single&id=<?php echo $trending['id']; ?>" class="fh5co_good_font"><?php echo $trending['title']; ?></a></div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="col-md-6">
        <div class="row">
            <?php 
            foreach ($new_posts as $new_post) {?>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="/Project/mvc/<?php echo $new_post['thumbnail'] ?>" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Oct
                            28,2017 </a></div>
                            <div class=""><a href="index.php?mod=home&act=single&id=<?php echo $new_post['id']; ?>" class="fh5co_good_font_2"> <?php echo $new_post['title'] ?> </a></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
         <?php 
         foreach ($posts as $post) {?>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="/Project/mvc/<?php echo $post['thumbnail'] ?>" alt=""
                     class="fh5co_img_special_relative"/></div>
                     <div class="fh5co_latest_trading_img_position_absolute"></div>
                     <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="index.php?mod=home&act=single&id=<?php echo $post['id']; ?>" class="text-white"><?php echo $post['title']; ?></a>
                        <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
           <?php 
           foreach ($news as $new1) {?>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="/Project/mvc/<?php echo $new1['thumbnail'] ?>" alt=""/></div>
                    <div>
                        <a href="index.php?mod=home&act=single&id=<?php echo $new1['id']; ?>" class="d-block fh5co_small_post_heading"><span class=""><?php echo $new1['title']; ?></span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> <?php echo $new1['created_at'] ?></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>
<div class="container-fluid fh5co_video_news_bg pb-4">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">Video News</div>
        </div>
        <div>
            <div class="owl-carousel owl-theme" id="slider3">
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video" width="100%" height="200"
                                src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
                                <img src="/Project/mvc/public/frontend/images/slide-13.jpg" alt=""/>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide" id="play-video">
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                        <span><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                <span class="">The top 10 funniest videos on YouTube </span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe id="video_2" width="100%" height="200"
                                    src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                    frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_2">
                                    <img src="/Project/mvc/public/frontend/images/news-18.jpg" alt=""/></div>
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_2" id="play-video_2">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                                <span><i class="fa fa-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                        <span class="">The top 10 embedded YouTube videos this month</span></a>
                                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item px-2">
                                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_hover_news_img_video_tag_position_relative">
                                        <div class="fh5co_news_img">
                                            <iframe id="video_3" width="100%" height="200"
                                            src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                            frameborder="0" allowfullscreen></iframe>
                                        </div>
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_3">
                                            <img src="/Project/mvc/public/frontend/images/instagram-6.jpg" alt=""/></div>
                                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_3" id="play-video_3">
                                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                                <span class="">The top 10 best computer speakers in the market</span></a>
                                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item px-2">
                                        <div class="fh5co_hover_news_img">
                                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                                <div class="fh5co_news_img">
                                                    <iframe id="video_4" width="100%" height="200"
                                                    src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                                    frameborder="0" allowfullscreen></iframe>
                                                </div>
                                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_4">
                                                    <img src="/Project/mvc/public/frontend/images/instagram-6.jpg" alt=""/>
                                                </div>
                                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_4" id="play-video_4">
                                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                                            <span><i class="fa fa-play"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                                    <span class="">The top 10 best computer speakers in the market</span></a>
                                                    <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid pb-4 pt-4 paddding">
                            <div class="container paddding">
                                <div class="row mx-0">
                                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                                        <div>
                                            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                                        </div>
                                        <?php 
                                        foreach ($posts as $post) {?>
                                            <div class="row pb-4">
                                                <div class="col-md-5">
                                                    <div class="fh5co_hover_news_img">
                                                        <div class="fh5co_news_img"><img src="/Project/mvc/<?php echo $post['thumbnail'] ?>" alt=""/></div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 animate-box">
                                                    <a href="index.php?mod=home&act=single&id=<?php echo $post['id']; ?>" class="fh5co_magna py-2"> <?php echo $post['title'] ?> </a> <br><a href="index.php?mod=home&act=single&id=<?php echo $trending['id']; ?>" class="fh5co_mini_time py-3"> Thomson Smith /
                                                        <?php echo $post['created_at'] ?> </a>
                                                        <div class="fh5co_consectetur"> <?php echo $post['description']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                                        <div>
                                            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="fh5co_tags_all">
                                            <?php 
                                            foreach ($categories as $category) {?>
                                                <a href="index.php?mod=home&act=classify_post&id=<?php echo $category['id'] ?>" class="fh5co_tagg"><?php echo $category['name']; ?></a>
                                            <?php } ?>
                                        </div>
                                        <div>
                                            <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                                        </div>
                                        <?php 
                                        foreach ($most_popular as $popular) {?>
                                            <div class="row pb-3">
                                                <div class="col-5 align-self-center">
                                                    <img src="/Project/mvc/<?php echo $popular['thumbnail'] ?>" alt="img" class="fh5co_most_trading"/>
                                                </div>
                                                <div class="col-7 paddding">
                                                    <div class="most_fh5co_treding_font"><a href="index.php?mod=home&act=single&id=<?php echo $popular['id'] ?>" > <?php echo $popular['title'] ?></a></div>
                                                    <div class="most_fh5co_treding_font_123"> <?php echo $popular['created_at']; ?></div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
                                    <div class="col-12 text-center pb-4 pt-4">
                                        <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                                        <!-- <a href="#" class="btn_pagging">1</a> -->
                                        <?php for($i=1;$i<=$total_page;$i++){ ?>
                                            <?php if($page == $i)?><a class="btn_pagging" href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        <?php } ?>
                                        <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php require_once 'footer.php' ?>