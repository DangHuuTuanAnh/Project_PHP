
<?php require_once'header.php'; ?>
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
                            <a href="index.php?mod=home&act=single&id=<?php echo $post['id'] ?>" class="fh5co_magna py-2"> <?php echo $post['title'] ?> </a> <br><a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                            April 18,2016 </a>
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
            foreach ($posts_trending as $trending) {?>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="/Project/mvc/<?php echo $trending['thumbnail'] ?>" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"><a href="index.php?mod=home&act=single&id=<?php echo $trending['id'] ?>" > <?php echo $trending['title'] ?></a></div>
                        <div class="most_fh5co_treding_font_123"> <?php echo $trending['created_at']; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="row mx-0">
        <div class="col-12 text-center pb-4 pt-4">
            <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
            <?php for($i=1;$i<=$total_page;$i++){ ?>
                <?php if($page == $i)?><a class="btn_pagging" href="index.php?mod=home&act=blog&page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php } ?>
            <a href="" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
        </div>
    </div>
</div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">

            <?php 
            foreach ($posts_trending as $trending) {?>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="/Project/mvc/<?php echo $trending['thumbnail'] ?>" alt=""/></div>
                        <div>
                            <a href="index.php?mod=home&act=single&id=<?php echo $trending['id'] ?>" class="d-block fh5co_small_post_heading"><span class=""><?php echo $trending['title']; ?></span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>