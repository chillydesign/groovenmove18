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






        // var shuffle_container = document.querySelector('.events_container');
        // var shuffleInstance = new Shuffle(shuffle_container, {
        //     itemSelector: '.single_event'
        // });
        //
        var $single_events = $('.single_event');
        var $filter_items = $('.filter_item');


            give_event_chevron_classes();


        $filter_items.on('click', function(e){
            var $this = $(this);
            e.preventDefault();
            var $group = $this.data('group');
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

            give_event_chevron_classes();
        })


        function give_event_chevron_classes() {

            console.log('give_event_chevron_classes');
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

                    console.log(classes);

                    single_event.addClass( classes.join('  ') );

                    ev_ind++;
                }
            });

        }



    });

})(jQuery, this);
