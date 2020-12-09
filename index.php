<?php get_header();?>
    <div class="container">
        <div class="main_slider col-12">
          <picture class="<?php echo get_template_directory_uri(); ?>/main_pic">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_pc.png" media="(min-width: 768px)"/>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_sp.png" media="(min-width: 375px)"/>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_sp.png" media="(min-width: 320px)"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_pc.png" class="main_image"/>
          </picture>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="logo">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_pc.png" media="(min-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_sp.png" media="(min-width: 375px)"/>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_sp.png" media="(min-width: 320px)"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_pc.png" class="text_image">
          </picture>
        </div>
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- ここまで！ -->
<!-- ここからあいちゃんの部分 -->
<?php get_footer(); ?>