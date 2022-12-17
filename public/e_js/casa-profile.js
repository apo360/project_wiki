(function ($) {
    "use strict";

    $(document).ready(function () {

        /* -------------------------------------------------------------------------
         PROPERTY DETAILS
         ------------------------------------------------------------------------- */

        // PROPERTY IMAGES
        $('.property-details .property-images').each(function () {

            var self = $(this),
                image_list = self.find('.image-list'),
                images = image_list.find('.image'),
                images_count = images.length,
                footer = self.find('.images-footer'),
                description = footer.find('.image-description'),
                counter = footer.find('.image-counter'),
                btn_prev = footer.find('.prev-btn'),
                btn_next = footer.find('.next-btn');

            // ADD CLASSES
            if (images_count === 1) {
                self.addClass('single-image');
            }
            if (images.find('img[alt=""]').length === images_count || images.find('img:not([alt])').length === images_count) {
                self.addClass('no-description');
            }

            // SET FIRST IMAGE DESCRIPTION
            if (images.first().find('img').attr('alt')) {
                description.text(images.first().find('img').attr('alt'));
            }

            // INIT OWL SLIDER
            if ($.fn.owlCarousel && images_count > 1) {

                // SET COUNTER
                counter.text('1/' + images_count);

                image_list.owlCarousel({
                    autoPlay: false,
                    slideSpeed: 300,
                    pagination: false,
                    paginationSpeed: 400,
                    singleItem: true,
                    addClassActive: true,
                    afterMove: function () {

                        var active = image_list.find('.owl-item.active'),
                            index = active.index();

                        // SET DESCRIPTION
                        if (active.find('img').attr('alt')) {
                            description.text(active.find('img').attr('alt'));
                        }
                        else {
                            description.text('');
                        }

                        // SET COUNTER
                        counter.text(parseInt(index) + 1 + '/' + images_count);

                    }
                });

                btn_prev.click(function () {
                    image_list.trigger('owl.prev');
                });
                btn_next.click(function () {
                    image_list.trigger('owl.next');
                });

            }

        });

        /*
         // BOOK FORM & CONTACT FORM
         $('.property-details .property-panel .book-form, .property-details .property-panel .contact-form').each(function () {

         var form = $(this);

         form.submit(function () {
         if (!form.uouFormValid()) {
         form.find('p.alert-message.warning.validation').slideDown(300);
         return false;
         }
         });

         });
         */


    });
})(jQuery);
