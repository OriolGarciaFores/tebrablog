<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tebrase
 * Date: 05/10/2018
 * Time: 11:53
 */
get_header();
?>
<main class="container">
    <div class="row">
        <div class="col-md-12">

            <?php
            while (have_posts()) : the_post();
                ?>
                <article <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </header>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

    </div>
</main>

<script type="text/javascript">
        document.getElementById('banner').setAttribute('style', 'background: url(<?php echo get_the_post_thumbnail_url(get_post()); ?>) center top no-repeat fixed; background-color:black; background-size:cover;');
</script>

<?php get_footer(); ?>

