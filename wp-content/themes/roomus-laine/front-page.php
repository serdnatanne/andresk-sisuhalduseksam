<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <h1>Rõõmus Laine OÜ spordiklubi</h1>
        <p>
            Tervisesport, ujumine, rühmatreeningud ja võistlused igas vanuses liikmetele.
            Tule trenni ja liitu rõõmsa liikumisega!
        </p>
        <a class="button" href="<?php echo esc_url(home_url('/kontakt')); ?>">Võta ühendust</a>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>Meie treeningud</h2>

        <div class="cards">
            <div class="card">
                <h3>Ujumistreeningud</h3>
                <p>Treeningud algajatele ja edasijõudnutele professionaalse juhendaja käe all.</p>
            </div>

            <div class="card">
                <h3>Üldfüüsiline ettevalmistus</h3>
                <p>Arendame vastupidavust, jõudu ja liikuvust läbi mitmekesiste harjutuste.</p>
            </div>

            <div class="card">
                <h3>Võistlusgrupp</h3>
                <p>Ettevalmistus kohalikel ja rahvuslikel võistlustel osalemiseks.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>Viimased uudised</h2>

        <div class="news-list">
            <?php
            $latest_posts = new WP_Query(array(
                'posts_per_page' => 3
            ));

            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) :
                    $latest_posts->the_post();
            ?>
                    <article class="news-item">
                        <p class="news-date"><?php echo get_the_date(); ?></p>
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <?php the_excerpt(); ?>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <p>Uudiseid ei ole veel lisatud.</p>
            <?php endif; ?>
        </div>

        <a class="button" href="<?php echo esc_url(home_url('/uudised')); ?>">Vaata kõiki uudiseid</a>
    </div>
</section>

<?php get_footer(); ?>
