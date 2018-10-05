<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tebrase
 * Date: 05/10/2018
 * Time: 13:57
 * The template for displaying author, categories, posttypes, date and tag.
 */
get_header();
?>
<main class="container page-content">
    <section class="row">
        <header class="col-xs-12">
            <h1 class="entry-title">
                <strong>Categoría:</strong> Mi categoria
            </h1>
        </header>
        <div class="col-md-12">
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('col-md-4 col-sm-6') ?>>
                    <a href="<?php echo get_permalink(); ?>">
                    <div class="img-thumbnail post-thumbnail">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('large');
                        } ?>
                        <div class="caption">
                            <div class="entry-header">
                                <h2 class="entry-title">
                                        <?php the_title(); ?>
                                </h2>
                            </div>
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
