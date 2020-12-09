
<!--- 単一記事用のファイル --->
<?php get_header(); ?>
<main id="margin-for-fixed">

<?php if (have_posts()) { ?>

<?php the_post(); ?>

<div class="post_title">
<h1><?php the_title(); ?></h1>
</div>
<hr> <!--- 水平線が出るタグ --->

<div class="post_content">
<p>
    <?php the_content(); ?>
</p>
</div>

<?php }else{ ?>
    <p>お探しの記事は見つかりませんでした</p>
<?php } ?>

<!-- ここに記事内容 -->

</main>
<?php get_footer(); ?>

