<?php get_header(); ?>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <p class="news-date"><?php echo get_the_date(); ?></p>
                    <h1><?php the_title(); ?></h1>

                    <div>
                        <?php the_content(); ?>
                    </div>

                    <p>
                        <a href="<?php echo esc_url(home_url('/uudised')); ?>">
                            Tagasi uudiste juurde
                        </a>
                    </p>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
