<?php get_header(); ?>


<!-- section -->
<section>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php $event_id = get_the_ID(); ?>
        <?php $image = thumbnail_of_post_url(  $event_id , 'large' ); ?>
        <?php $category = the_category(','); ?>
        <?php $sous_titre = get_field('sous_titre'); ?>
        <?php $time = get_field('heure'); ?>
        <?php $location = get_field('lieu'); ?>
        <?php if ($location) {
            $location_title = $location->post_title;
          } else {
            $location_title = '';} 
        ?>
        <?php $dates = (get_field('dates', $event_id)) ?  get_field('dates', $event_id) : array();  ?>
        <?php $date_text = array();  ?>
        <?php foreach ($dates as $date) array_push($date_text, $date['date']);  ?>


        <!-- article -->
        <article>

            <header  class="event_header"  style="background-image:url(<?php echo $image; ?>);">
                <div class="event_title">
                    <div class="container">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo $category; ?>  - <?php echo $location_title; ?>  - <?php echo implode(',' ,  $date_text); ?>  - <?php echo $time; ?></p>
                    </div>
                </div>
            </header>


            <?php the_content(); // Dynamic Content ?>



        </article>
        <!-- /article -->

    <?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article>

        <h1><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h1>

    </article>
    <!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->



<?php get_footer(); ?>
