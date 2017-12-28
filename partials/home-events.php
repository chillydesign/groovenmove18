<?php $events = new WP_Query(array(
    'post_type' => 'evenement',
    'posts_per_page' => -1
));




?>

<?php  if ($events->have_posts() ) :  ?>

    <div id="filters_container">
        <div class="container">
            <div class="filters_container_inner">
                <div class="filter_container">
                    <h4>Feb</h4>
                    <div class="filter_items">
                        <div data-group="24/02/2018" class="filter_item">24</div>
                        <div data-group="25/02/2018" class="filter_item">25</div>
                        <div data-group="26/02/2018" class="filter_item">26</div>
                        <div data-group="27/02/2018" class="filter_item">27</div>
                    </div>

                </div>
                <div class="filter_container">
                    <h4>Mar</h4>
                    <div class="filter_items">
                        <div data-group="01/03/2018" class="filter_item">1</div>
                        <div data-group="02/03/2018" class="filter_item">2</div>
                        <div data-group="03/03/2018" class="filter_item">3</div>
                        <div data-group="04/03/2018" class="filter_item">4</div>
                    </div>

                </div>
                <div class="filter_container">
                    <h4>Cateogie</h4>
                    <div class="filter_items">
                        <div class="filter_item">Toutes</div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    <div class="container">



        <div class="events_container">

            <?php $ev = 0; while($events->have_posts()) : $events->the_post();  ?>

                <?php $event_classes = get_event_chevron_classes($ev); ?>

                <?php $event_id = get_the_ID(); ?>
                <?php $image = thumbnail_of_post_url(  $event_id , 'medium' ); ?>
                <?php $dates = (get_field('dates', $event_id)) ?  get_field('dates', $event_id) : array();  ?>
                <?php $date_text = array();   ?>
                <?php foreach ($dates as $date) {
                    array_push($date_text, $date['date']);
                }; ?>
                <?php $groups = $date_text;  array_push($groups, 'something');  ?>

                <a href="<?php echo get_the_permalink(); ?>" data-groups='["<?php echo implode('","', $groups) ?>"]'  class="single_event  <?php // echo $event_classes; ?>" style="background-image:url(<?php echo $image; ?>)">
                    <div class="event_text">
                        <h3><?php echo get_the_title(); ?></h3>
                        <p class="event_date"><?php echo implode(',', $date_text) ?></p>
                        <p class="event_excerpt"><?php echo get_the_excerpt(); ?></p>
                    </div>
                </a>




                <?php $ev++; endwhile; ?>

            </div>
        </div>
    <?php endif; ?>
