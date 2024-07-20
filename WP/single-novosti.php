<?php get_header(); ?>

<?php $new = pods('novosti', get_the_ID()); ?>

<main class="content">
  <div class="news-page-detail">
    <div class="section intro">
      <div class="container">
        <div class="intro__inner">
          <div class="banner banner--news"><img class="banner__image" src="
          <?php
          if (isset($new->field('banner_image')['guid'])) {
            echo $new->field('banner_image')['guid'];
          } else {
            echo the_post_thumbnail_url();
          }
          ?>
          "></div>
        </div>
      </div>
    </div>
    <div class="section news-detail">
      <div class="container">
        <div class="news-detail__inner">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <div class="section empty empty--static">
      <div class="container"><?php echo do_shortcode('[subscribe-block]'); ?></div>
    </div>
  </div>
</main>
<?php get_footer(); ?>