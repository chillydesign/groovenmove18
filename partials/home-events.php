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
                        <div class="filter_item" data-group="24/02/2018">24</div>
                        <div class="filter_item" data-group="25/02/2018">25</div>
                        <div class="filter_item" data-group="26/02/2018">26</div>
                        <div class="filter_item" data-group="27/02/2018">27</div>
                    </div>

                </div>
                <div class="filter_container">
                    <h4>Mar</h4>
                    <div class="filter_items">
                        <div class="filter_item" data-group="01/03/2018">1</div>
                        <div class="filter_item" data-group="02/03/2018">2</div>
                        <div class="filter_item" data-group="03/03/2018">3</div>
                        <div class="filter_item" data-group="04/03/2018">4</div>
                    </div>

                </div>
                <div class="filter_container">
                    <h4>Cateogie</h4>
                    <div class="filter_items has_potential_filter_items">
                        <div class="current_filter_item"><div class="fake_filter_item">Toutes </div>&#9660;</div> 
                        <div class="potential_filter_items">
                            <div class="filter_item">Toutes</div>
                            <div class="filter_item" data-group="jiving">jiving</div>
                            <div class="filter_item" data-group="dancing">dancing</div>
                            <div class="filter_item" data-group="twisting">twisting</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    <div class="container">



        <div class="events_container">

            <?php $ev = 0; while($events->have_posts()) : $events->the_post();  ?>

                <?php // $event_classes = get_event_chevron_classes($ev); ?>

                <?php $event_id = get_the_ID(); ?>
                <?php $categories = get_the_terms($event_id, 'event_cat'); ?>
                <?php $categories_text =  array_map(function($cat) { return $cat->slug; },  $categories  )  ; ?>
                <?php $image = thumbnail_of_post_url(  $event_id , 'medium' ); ?>
                <?php $dates = (get_field('dates', $event_id)) ?  get_field('dates', $event_id) : array();  ?>
                <?php $date_text = array();   ?>
                <?php foreach ($dates as $date) {
                    array_push($date_text, $date['date']);
                }; ?>
                <?php $groups =  array_merge($date_text, $categories_text  );  ?>

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
