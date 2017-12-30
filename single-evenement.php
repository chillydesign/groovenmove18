<?php get_header(); ?>


<!-- section -->
<section>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php $event_id = get_the_ID(); ?>
        <?php $image = thumbnail_of_post_url(  $event_id , 'large' ); ?>
        <?php $category = the_category(','); ?>
        <?php $sous_titre = get_field('sous_titre'); ?>
        <?php $time = get_field('heure'); ?>
        <?php $tarifs = get_field('tarifs'); ?>
        <?php $location = get_field('lieu'); ?>
        <?php $dates = (get_field('dates', $event_id)) ?  get_field('dates', $event_id) : array();  ?>
        <?php $date_text = array();  ?>
        <?php foreach ($dates as $date) array_push($date_text, $date['date']);  ?>
        <?php $event_metas = array(); ?>
        <?php if ($location)  array_push( $event_metas, $location->post_title  ); ?>
        <?php if (sizeof($date_text) > 0)  array_push( $event_metas,  implode(',' ,  $date_text)); ?>
        <?php if ($time) array_push( $event_metas, $time); ?>
        <?php if ($sous_titre) array_push( $event_metas, $sous_titre); ?>

        <!-- article -->
        <article>

            <header  class="event_header"  style="background-image:url(<?php echo $image; ?>);">
                <div class="event_title">
                    <div class="container">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo implode(' - ', $event_metas); ?></p>
                    </div>
                </div>
            </header>


            <div class="container">

                <div class="row">

                    <div class="col-sm-8">



                    </div>
                    <div class="col-sm-4">
                        <?php if ($location): ?>
                            <?php $location_id = $location->ID;   ?>
                            <?php $address = get_field( 'address', $location_id ); ?>
                            <h3><i class="fa fa-map-marker"></i> <?php echo $location->post_title; ?></h3>
                            <p><?php echo $address; ?></p>
                            <div id="map_container"></div>
                            <script type='text/javascript' src='//maps.google.com/maps/api/js?key=AIzaSyC-BDJZU14ltCrYRPei33a4ZSQfJqRbxNY&#038;ver=4.8.1'></script>
                            <script type="text/javascript">
                                var place_location = '<?php echo $address //TODO replace any ; ?>';
                            </script>
                            <hr/>
                        <?php endif; ?>
                        <?php if ($tarifs): ?>
                            <h3><i class="fa fa-ticket"></i> Tarifs</h3>
                            <?php echo $tarifs; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>


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
