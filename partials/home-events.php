<?php $events = new WP_Query(array(
    'post_type' => 'evenement',
    'posts_per_page' => -1,
    'orderby' => 'menu_order'
));




?>

<?php  if ($events->have_posts() ) :  ?>

    <div id="filters_container">
        <div class="container">
            <div class="filters_container_inner">
              <div class="filter_container">
                  <h4>Jan</h4>
                  <div class="filter_items">
                      <div class="filter_item" data-group="2018-01-21">21</div>
                      <div class="filter_item" data-group="2018-01-22">22</div>
                      <div class="filter_item" data-group="2018-01-23">23</div>
                  </div>

              </div>
              <div class="filter_container">
                  <h4>Feb</h4>
                  <div class="filter_items">
                      <div class="filter_item" data-group="2018-02-24">24</div>
                      <div class="filter_item" data-group="2018-02-25">25</div>
                      <div class="filter_item" data-group="2018-02-26">26</div>
                      <div class="filter_item" data-group="2018-02-27">27</div>
                      <div class="filter_item" data-group="2018-02-28">28</div>
                  </div>

              </div>
                <div class="filter_container">
                    <h4>Mar</h4>
                    <div class="filter_items">
                        <div class="filter_item" data-group="2018-03-01">1</div>
                        <div class="filter_item" data-group="2018-03-02">2</div>
                        <div class="filter_item" data-group="2018-03-03">3</div>
                        <div class="filter_item" data-group="2018-03-04">4</div>
                    </div>

                </div>
                <div class="filter_container">
                    <h4>Catégorie</h4>
                    <div class="filter_items has_potential_filter_items">
                        <div class="current_filter_item"><div class="fake_filter_item">Toutes </div>&#9660;</div>
                        <div class="potential_filter_items">
                            <div class="filter_item">Toutes</div>
                            <div class="filter_item" data-group="soiree-spectacles">Soirée spectacle</div>
                            <div class="filter_item" data-group="battle-de-danse">Battle de danse</div>
                            <div class="filter_item" data-group="stage">Stage</div>
                            <div class="filter_item" data-group="projection">Projection</div>
                            <div class="filter_item" data-group="soiree-clubbing">Soirée clubbing</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="events_container">

            <?php $ev = 0; while($events->have_posts()) : $events->the_post();  ?>

                <?php // $event_classes = get_event_chevron_classes($ev); // do this with js now
                $event_id = get_the_ID();
                $archive = get_field('archive');
                $categories = get_the_terms($event_id, 'event_cat');
                $categories_text = ($categories) ?  array_map(function($cat) { return $cat->slug;}, $categories  ): array();
                $image = thumbnail_of_post_url(  $event_id , 'medium' );
                $dates = (get_field('dates', $event_id)) ?  get_field('dates', $event_id) : array();
                $date_text = array(); $dates_as_date = array();  setlocale(LC_TIME, 'fr_FR.UTF-8');
                foreach ($dates as $date) {
                    $date_timestamp = strtotime( $date['date'] );
                    $date_as_date = strftime('%Y-%m-%d', $date_timestamp);
                    $date_as_text = strftime('%a %d %B', $date_timestamp);
                    array_push($dates_as_date, $date_as_date);
                    array_push($date_text, $date_as_text);
                };
                $groups = array_merge($dates_as_date,$categories_text );
                ?>

                <a href="<?php echo get_the_permalink(); ?>" data-groups='["<?php echo implode('","', $groups) ?>"]'  class="single_event  <?php // echo $event_classes; ?> <?php if(get_field('archive')){echo ' archive';}?>" style="background-image:url(<?php echo $image; ?>)">

                    <div class="event_text">
                        <h3><?php echo get_the_title(); ?></h3>
                        <p class="event_date"><?php echo implode(' - ', $date_text) ?></p>
                        <p class="event_excerpt"><?php echo get_the_excerpt(); ?></p>
                    </div>

                    <div class="single_event_inner"></div>

                </a>

                <?php $ev++; endwhile; ?>

                <?php $tdu = get_template_directory_uri(); ?>
                <a  target="_blank" data-groups='[]' href="<?php echo wp_upload_dir()['baseurl']; ?>/2018/01/programme_gnm2018_bon_a_tirer-1.pdf"  class="single_event"   style="background-image: url(<?php echo $tdu . '/img/man.jpg'; ?>);">
                    <div class="event_text">
                        <h3>Brochure GNM 2018</h3>
                        <p class="event_date"></p>
                        <p class="event_excerpt"><br>Téléchager le programme complet du Festival Groove'N'Move 2018.</p>
                    </div>
                    <div class="single_event_inner"></div>
                </a>


            </div>
        </div>
    <?php endif; ?>
