<?php
get_header(); ?>
<main class="content">
  <div class="container">
    <h1><?php echo the_title(); ?></h1>
    <?php the_post();
    the_content(); ?>
  </div>
</main>
<?php get_footer(); ?>