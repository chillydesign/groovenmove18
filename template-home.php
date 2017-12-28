<?php /* Template Name: Home Page Template */ get_header(); ?>




<?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <?php get_template_part( 'partials/home', 'poster-cover' ); ?>
    <?php get_template_part( 'partials/home', 'events' ); ?>


<?php endwhile; endif; ?>






<?php get_footer(); ?>
