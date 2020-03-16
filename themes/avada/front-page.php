<?php get_header(); ?>

    <main>
        <?php while (have_posts()): the_post(); ?>

        <?php endwhile; ?>
    </main>

<?php get_footer(); ?>