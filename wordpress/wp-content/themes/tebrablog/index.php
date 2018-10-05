<?php get_header(); ?>
<main class="container">
<?php
$args = array('numberposts' => 6, 'category' => 0, 'orderby' => 'post_date', 'order' => 'DESC', 'post_type' => 'post');
$recent_posts = wp_get_recent_posts($args, ARRAY_A);
?>
    <section class="row">
        <header class="col-xs-12">
            <h1 class="entry-title">
                <strong>Last posts</strong>
            </h1>
        </header>
        <div class="col-md-12">
            <?php foreach ($recent_posts as $post) { ?>
                <article <?php post_class('row') ?>>
                        <div class="col-sm-7 post-thumbnail">
                            <?php if (get_the_post_thumbnail(get_post($post["ID"]),'large')) {
                                echo get_the_post_thumbnail(get_post($post["ID"]),'large');
                            } ?>
                        </div>
                    <div class="col-sm-5">
                        <div class="entry-header">
                            <h2 class="entry-title">
                                <?php echo $post['post_title']; ?>
                            </h2>
                        </div>
                        <div class="entry-content">
                            <?php echo tebrablog_get_the_excerpt($post['ID']); ?>
                            <a href="<?php echo get_permalink(get_post($post["ID"])); ?>">Seguir leyendo</a>
                        </div>
                    </div>
                </article>
                <hr>
            <?php } ?>
        </div>
    </section>


</main>

<?php get_footer(); ?>
