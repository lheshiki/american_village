<?php get_header();?>
    <div class= "photo_div">
    <!-- Slider main container -->
    <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_pc.png"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>//assets/img/visual_text_pc.png"></div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
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
<div class="moreread" id="next">
  <a href="<?php echo next_posts($article_lists->max_num_pages, false); ?>">もっと見る</a>
</div>
<?php }?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- ここまで！ -->
<!-- ここからあいちゃんの部分 -->
<?php get_footer(); ?>