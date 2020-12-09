<?php get_header();?>
    <div class= "photo_div">
    <div class="swiper-container swiper-container-horizontal swiper-container-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" style="transition-duration: 0ms;">
                <!-- Slides -->
                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 110px; transform: translate3d(-110px, 0px, 0px); opacity: 1; transition-duration: 0ms;"><img src="http://localhost/wordpress/wp-content/themes/american_village/assets/img/visual_1_pc.png" class="main_image"></div>
                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 110px; transform: translate3d(-220px, 0px, 0px); opacity: 1; transition-duration: 0ms;"><img src="http://localhost/wordpress/wp-content/themes/american_village/assets/img/logo.png" class="main_image"></div>
                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 110px; transform: translate3d(-330px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><img src="http://localhost/wordpress/wp-content/themes/american_village/assets/img/visual_text_sp.png" class="main_image"></div>
                ...
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 110px; transform: translate3d(-453px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><img src="http://localhost/wordpress/wp-content/themes/EnglishClass/img/155295_s.jpg"></div></div>
            <!-- If we need pagination -->
            <div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
            
            <!-- If we need navigation buttons -->
        </div>
        <script>
            var mySwiper = new Swiper ('.swiper-container', {
            effect: "fade",
            loop: true,
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            autoplay: 3000,
            speed:1000,
            breakpoints: {
                767: {
                slidesPerView: 1,
                spaceBetween: 0
                }
            }
            })
        </script>
        <!-- ここにあった！ -->
    </div>
    <div class="sub-container">
        <p class="sub_explanation">進化し続ける「街」<br class="subtitle_fix">アメリカンビレッジマガジン</p>
    </div>
<!-- ここからゆたかの部分！ -->
<div class="name-board">  
  <h1>Latest Article</h1>
</div>
<div class="board">
  <div class="board-contents">
<?php
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
    'orderby' => 'date',
    'order'   => 'DESC',
    'paged' => $paged,
);
$article_lists = new WP_Query($args);
?>

  <?php while (have_posts()):the_post(); ?>
       <article>
          <div class="article">
              <a href="<?php the_permalink(); //詳細へリンク ?>" style="text-decoration: none; color: black;">
              <?php the_post_thumbnail(); ?>
                  <img src="" alt="">
                  <div class="articleBox">
                      <h1 class="date"><?php the_time('Y年m月d日'); //投稿日時　?></h1>
                      <p class="text"><?php the_title(); //タイトル ?></p>
                      <p class="readMore">READ MORE</p>
                  </div>
                  <p class="blackLine"></p>
              </a>
          </div>
      </article>
      <?php endwhile; ?>
  </div>
</div>
<?php if($paged < $article_lists->max_num_pages) {?>
<div class="d-flex justify-content-center m-3 moreread" id="next">
  <a href="<?php echo next_posts($article_lists->max_num_pages, false); ?>">もっと見る</a>
</div>
<?php }?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- ここまで！ -->
<!-- ここからあいちゃんの部分 -->
<?php get_footer(); ?>