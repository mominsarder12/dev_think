<!-- header section calling here -->
<?php get_header(); ?>


<section id="content-body">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>

                        <div class="blog-area">
                            <div class="post-thumb">
                                <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
                            </div>
                            <div class="post-details">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                <?php endwhile;
                else :
                    _e('No post found');
                endif; ?>
                <div id="page_nav">
                    <?php if ('dev_pagenav') {
                        dev_pagenav();
                    } else { ?>
                        <?php next_posts_link(); ?>
                        <?php previous_posts_link(); ?>
                    <?php } ?>
                </div>
            </div>
            <section class="col-md-3">
                <?php get_sidebar(); ?>
            </section>
        </div>
    </div>
</section>

<!-- footer section calling here -->
<?php get_footer(); ?>
