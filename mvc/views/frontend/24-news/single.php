
<?php require_once 'header.php'; ?>
<div id="fh5co-title-box" style="background-image: url(/Project/mvc/<?php echo $post['thumbnail']; ?>); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">
        <img src="<?php echo $post['user']['avatar'] ?>" alt="Free HTML5 by FreeHTMl5.co">
        <span>January 1, 2018</span>
        <h2><?php echo $post['title']; ?></h2>
    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <p>
                    <?php echo htmlspecialchars_decode($post['content']); ?>
                </p>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <?php 
                    foreach ($categories as $category) {?>
                        <a href="#" class="fh5co_tagg"><?php echo $category['name']; ?></a>
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
                            <a href="index.php?mod=home&act=single&id=<?php echo $trending['id'] ?>"" class="d-block fh5co_small_post5_heading"><span class=""><?php echo $trending['title'] ?></span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php require_once'footer.php'; ?>