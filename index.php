<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/blog.css" class="css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
    <title>AmericanVillage</title>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-end" id="navbarsExample08">
              <ul class="navbar-nav">
                <li class="nav-item active">
              <a class="nav-link" href="#" style="color: black;">Menu01 <span class="sr-only">（現在位置）</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: black;">Menu02</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: black;">Menu03</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: black;">Menu04</a>
                </li>
              </ul>
            </div>
        </nav>
    </header>
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
<!-- footer -->
<footer class="justify-content-center">
   
  <!-- footer 中央 -->
  <p class="footer_center">Copyright©️ Shinohara. ALL RIGHTS RESERVED.</p>
</footer>
</body>
</html>