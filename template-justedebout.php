<?php /* Template Name: Juste Debout */ get_header(); ?>


<!-- section -->
<section>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article>

            <header  class="event_header"  style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
                <div class="event_title">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm-8">
                        <div class="floatdiv floatleftdiv"><?php include('doublechevron.svg'); ?></div>
                        <div class="floatdiv floatrightdiv">
                          <h1>
                            <?php the_title(); ?></h1>
                          <p>
                            <?php echo get_field('sous_titre'); ?>
                          </p>
                        </div>
                        <div class="endpoint"><?php include('endpoint.svg'); ?></div>
                        </div>
                        </div>
                    </div>
                </div>
            </header>


            <div class="container">

                <div class="row">

                    <div class="col-sm-8">


                        <?php get_template_part( 'section-loop' ); ?>



                    </div>
                    <div class="col-sm-4">
                      <?php $location = get_field('lieu'); ?>
                        <?php if ($location): ?>
                            <?php $location_id = $location->ID;   ?>
                            <?php $address = get_field( 'address', $location_id ); ?>
                            <?php $display_address = get_field( 'display_address', $location_id ); ?>
                            <h3><i class="fa fa-map-marker"></i> <?php echo $location->post_title; ?></h3>
                            <p><?php echo $display_address; ?></p>
                            <div id="map_container"></div>
                            <script type='text/javascript' src='//maps.google.com/maps/api/js?key=AIzaSyC3RS38lnSUazn-fT-DUG69mF6RS3-IQI0&#038;ver=4.8.1'></script>
                            <script type="text/javascript">
                                var place_location = '<?php echo $address //TODO replace any ; ?>';
                            </script>

                              <?php if( have_rows('tpg', $location_id ) ):
                                echo '<p><strong>Transports publics (TPG)</strong><br>';
                                while( have_rows('tpg', $location_id ) ): the_row();
                                  echo 'Arrêt ' . get_sub_field('bus-stop').' ';
                                  if( have_rows('ligne-repeater', $location_id ) ):
                                    while( have_rows('ligne-repeater', $location_id ) ): the_row();
                                      echo '<span class="tpg tpg'. get_sub_field('ligne').'"></span>';
                                    endwhile;
                                    echo '<br />';
                                  endif;
                              endwhile;
                              echo '</p>';
                            endif;?>


                          <hr/>
                        <?php endif; ?>
                        <?php if (get_field('right_col')): ?>
                            <?php echo get_field('right_col'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>



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





<?php get_footer(); ?>
