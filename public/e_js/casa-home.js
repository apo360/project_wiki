(function ($) {
    "use strict";

    $(document).ready(function () {

        /* -----------------------------------------------------------------------------

         BANNER

         ----------------------------------------------------------------------------- */

        /* -------------------------------------------------------------------------
         BANNER BG
         ------------------------------------------------------------------------- */

        $('#banner .banner-bg').each(function () {

            var self = $(this),
                images = self.find('.banner-bg-item');

            // SET BG IMAGES
            images.each(function () {
                var img = $(this).find('img');
                if (img.length > 0) {
                    $(this).css('background-image', 'url(' + img.attr('src') + ')');
                    img.hide();
                }
            });

            // INIT SLIDER
            if ($.fn.owlCarousel) {
                self.owlCarousel({
                    slideSpeed: 300,
                    pagination: false,
                    paginationSpeed: 400,
                    singleItem: true,
                    addClassActive: true
                });
            }

            // SET DEFAULT IF NEEDED
            var active_tab_index = $('.banner-search-inner .tab-title.active').index();
            if (active_tab_index !== 0) {
                self.trigger('owl.jumpTo', active_tab_index);
            }

        });

        /* -------------------------------------------------------------------------
         BANNER SEARCH
         ------------------------------------------------------------------------- */

        // moved to global.js


        /* -----------------------------------------------------------------------------

         TESTIMONIALS

         ----------------------------------------------------------------------------- */

        $('#testimonials').each(function () {

            var self = $(this),
                list = self.find('.testimonial-list'),
                testimonials = list.find('.testimonial'),
                interval = self.data('interval') ? parseInt(self.data('interval')) > 0 : false;

            // SHOW FIRST PORTRAIT
            var first_portrait = testimonials.first().find('.portrait img');
            if (first_portrait.length > 0) {
                list.before('<div class="active-portrait"><img src="' + first_portrait.attr('src') + '" alt="' + first_portrait.attr('alt') + '"></div>');
            }

            // CREATE SLIDER
            list.owlCarousel({
                autoPlay: interval,
                slideSpeed: 300,
                pagination: false,
                paginationSpeed: 400,
                singleItem: true,
                addClassActive: true,
                afterMove: function () {
                    var new_portrait;
                    self.find('.active-portrait').fadeOut(200, function () {
                        new_portrait = list.find('.owl-item.active .portrait img');
                        if (new_portrait.length > 0) {
                            self.find('.active-portrait img').attr('src', new_portrait.attr('src'));
                            self.find('.active-portrait img').attr('alt', new_portrait.attr('alt'));
                        }
                        self.find('.active-portrait').fadeIn(200);
                    });
                }
            });

            // NAV
            self.find('.navigation .prev').click(function () {
                list.trigger('owl.prev');
            });
            self.find('.navigation .next').click(function () {
                list.trigger('owl.next');
            });

        });



    });
})(jQuery);
