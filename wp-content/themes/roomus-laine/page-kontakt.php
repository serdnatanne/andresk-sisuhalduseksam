<?php get_header(); ?>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>

                <div class="contact-box">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Sisu ei leitud.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
