<?php get_header(); ?>


<!-- section -->
<section>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php $event_id = get_the_ID(); ?>
        <?php $image = thumbnail_of_post_url(  $event_id , 'large' ); ?>
        <?php $category = get_the_terms( $event_id, 'event_cat' ); ?>
        <?php $artiste_principal = get_field('artiste_principal'); ?>
        <?php $sous_titre = get_field('sous_titre'); ?>
        <?php $tarifs = get_field('tarifs'); ?>
        <?php $location = get_field('lieu'); ?>
        <?php $dates = (get_field('dates', $event_id)) ?  get_field('dates', $event_id) : array();  ?>
        <?php $date_text = array();  ?>
        <?php foreach ($dates as $date) {
          array_push($date_text, $date['heure']);
        }   ?>
        <?php $event_metas = array(); ?>
        <?php if (sizeof($category)>0)  array_push( $event_metas, $category[0]->name); ?>
        <?php if ($location)  array_push( $event_metas, $location->post_title  ); ?>
        <?php if (sizeof($date_text) > 0)  array_push( $event_metas,  implode(' - ' ,  $date_text)); ?>

        <!-- article -->
        <article>

            <header  class="event_header"  style="background-image:url(<?php echo $image; ?>);">
                <div class="event_title">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm-8">
                        <div class="floatdiv floatleftdiv"><?php include('doublechevron.svg'); ?></div>
                        <div class="floatdiv floatrightdiv">
                          <h1>
                            <?php the_title(); ?><?php if($artiste_principal){ echo ' - ' . $artiste_principal;} ?></h1>
                          <p>
                            <?php echo implode(' - ', $event_metas); ?>
                            <?php if($sous_titre){echo '<br><span class="subtitle">' . $sous_titre . '</span>';} ?>
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
                        <?php if ($location): ?>
                            <?php $location_id = $location->ID;   ?>
                            <?php $address = get_field( 'address', $location_id ); ?>
                            <?php $display_address = get_field( 'display_address', $location_id ); ?>
                            <h3><i class="fa fa-map-marker"></i> <?php echo $location->post_title; ?></h3>
                            <p><?php echo $display_address; ?></p>
                            <div id="map_container"></div>
                            <script type='text/javascript' src='//maps.google.com/maps/api/js?key=AIzaSyC-BDJZU14ltCrYRPei33a4ZSQfJqRbxNY&#038;ver=4.8.1'></script>
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
                        <?php if ($tarifs): ?>
                            <h3><i class="fa fa-ticket"></i> Tarifs</h3>
                            <?php echo $tarifs; ?>
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
