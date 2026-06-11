<?php get_header(); ?>

<section class="section">
    <div class="container">
        <h1>Uudised</h1>
        <p>Siit leiad Rõõmus Laine OÜ spordiklubi viimased uudised, treeninguteated ja võistlustulemused.</p>

        <div class="news-list">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="news-item">
                        <p class="news-date"><?php echo get_the_date(); ?></p>

                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <?php the_excerpt(); ?>

                        <a class="button" href="<?php the_permalink(); ?>">Loe edasi</a>
                    </article>
                <?php endwhile; ?>

                <?php the_posts_pagination(); ?>

            <?php else : ?>
                <p>Uudiseid ei ole veel lisatud.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
