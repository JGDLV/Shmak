<?php /* Template Name: Фотогалерея */ get_header(); ?>
<main class="content">
    <div class="gallery-page">
        <div class="section gallery">
            <div class="container">
                <div class="gallery-block">
                    <h1 class="section__header">интерьер</h1>
                    <div class="gallery-grid">
                        <?php echo do_shortcode('[folder-gallery path="/assets/img/galleries/interior/"]'); ?>
                    </div>
                </div>
                <div class="gallery-block">
                    <h2 class="section__header">команда</h2>
                    <div class="gallery-grid">
                        <?php echo do_shortcode('[folder-gallery path="/assets/img/galleries/team/"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section empty empty--static">
            <div class="container"><?php echo do_shortcode('[subscribe-block]'); ?></div>
        </div>
    </div>
</main>
<?php get_footer(); ?>