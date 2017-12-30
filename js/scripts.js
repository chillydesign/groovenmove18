// import Shuffle from '../node_modules/shufflejs/dist/shuffle.min.js';

(function ($, root, undefined) {

    $(function () {

        'use strict';


        $('.single_event').on('mouseover', function(e) {
            var $this = $(this);
            if ($this.hasClass('hovered')) {
                $this.removeClass('hovered');
            } else {
                $this.addClass('hovered');
            }
        }).on('mouseout', function(e) {
            var $this = $(this);
            $this.removeClass('hovered');
        });





        /// HOME PAGE SEARCH
        /// HOME PAGE SEARCH
        /// HOME PAGE SEARCH

        var $single_events = $('.single_event');
        var $filter_items = $('.filter_item');
        var $potential_filter_items = $('.potential_filter_items');
        var $current_filter_item = $('.current_filter_item');
        var $fake_filter_item = $('.fake_filter_item');

        give_event_chevron_classes();
        $current_filter_item.on('click', function(){
            $potential_filter_items.toggleClass('visible');
        });

        $filter_items.on('click', function(e){
            e.preventDefault();
            var $this = $(this);
            var $group = $this.data('group');
            $filter_items.removeClass('selected')
            $this.addClass('selected');

            if ($group) {
                $single_events.each(function(index){

                    var $single_event = $( $single_events[index] );
                    if(  $single_event.data('groups').indexOf($group) > -1 ) {
                        $single_event.removeClass('invisible_event');
                    } else {
                        $single_event.addClass('invisible_event');
                    }
                })
            } else {
                $single_events.removeClass('invisible_event');
            };

            if ( $this.parent().hasClass('potential_filter_items') ) {
                $fake_filter_item.html($this.html());
                $potential_filter_items.toggleClass('visible');
            }
            give_event_chevron_classes();
        })

        function give_event_chevron_classes() {

            var ev_ind = 0;
            var single_events = $('.single_event');

            var removable_classes = ['se_md_flip', 'se_md_push_right', 'se_md_push_left', 'se_sm_flip', 'se_sm_push_right', 'se_sm_push_left', 'se_xs_flip'];
            single_events.removeClass( removable_classes.join(' ') );


            single_events.each(function(i) {


                var single_event = $( single_events[i] );


                if ( single_event.hasClass('invisible_event') == false ) {

                    var classes = [];

                    if (ev_ind % 6 > 2) {
                        classes.push('se_md_flip');
                    }
                    if (ev_ind % 3 == 0) {
                        classes.push('se_md_push_right');
                    }
                    if (ev_ind % 3 == 2) {
                        classes.push('se_md_push_left');
                    }
                    if (ev_ind % 4 > 1) {
                        classes.push('se_sm_flip');
                    }
                    if (ev_ind % 2 == 0) {
                        classes.push('se_sm_push_right');
                    }
                    if (ev_ind % 2 == 1) {
                        classes.push('se_sm_push_left');
                    }

                    if (ev_ind % 2 == 1) {
                        classes.push('se_xs_flip');
                    }

                    single_event.addClass( classes.join('  ') );

                    ev_ind++;
                }



            });

        } // end of give_event_chevron_classes

        ///// END OF HOME PAGE EVENTS SEARCH
        ///// END OF HOME PAGE EVENTS SEARCH
        ///// END OF HOME PAGE EVENTS SEARCH





        //// MAPS CONTAINER
        //// MAPS CONTAINER
        //// MAPS CONTAINER
        if (typeof place_location !== 'undefined') {

            var map_theme = [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}];


            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({'address': place_location}, function(results, status) {
                if (status === 'OK') {
                    if (results.length > 0) {
                        var position = results[0].geometry.location ;
                        var location_map_container = $('#map_container');
                        var map_options = {
                             zoom: 16,
                             mapTypeControl: true,
                             scrollwheel: false,
                             draggable: true,
                             navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                             mapTypeId: google.maps.MapTypeId.ROADMAP,
                             styles: map_theme,
                             center: position
                         };
                        var location_map = new google.maps.Map(location_map_container.get(0), map_options);
                        var marker = new google.maps.Marker({
                            position: position,
                            map: location_map,
                            optimized: false
                        });

                    }
                } else {
                    console.log('Geocode was not successful for the following reason: ' + status);
                }
            });



        }
        //// END OF MAPS CONTAINER
        //// END OF MAPS CONTAINER
        //// END OF MAPS CONTAINER



    });

})(jQuery, this);
