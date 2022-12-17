(function ($) {
    "use strict";

    $(document).ready(function () {

        /* -----------------------------------------------------------------------------

         CORE

         ----------------------------------------------------------------------------- */

        /* -------------------------------------------------------------------------
         BROWSE
         ------------------------------------------------------------------------- */

        // PROPERTIES
        $('#browse .browse-properties').uouTabbed();

        // DESTINATIONS
        $('#browse .browse-destinations .top-destination').each(function () {

            var self = $(this),
                image = self.find('.destination-thumb');

            if (image.length > 0) {
                self.css('background-image', 'url(' + image.attr('src') + ')');
            }

        });

        // MEMBERS
        $('#browse .browse-members-search input').focus(function () {
            $(this).parent().find('.fa').fadeOut(200);
        });
        $('#browse .browse-members-search input').blur(function () {
            if ($(this).val() === '') {
                $(this).parent().find('.fa').fadeIn(200);
            }
        });

        /* -------------------------------------------------------------------------
         CONTACT FORM
         ------------------------------------------------------------------------- */

        $('#contact-form').each(function () {
            $(this).uouContactForm();
        });

        /* -------------------------------------------------------------------------
         PROPERTIES LISTING
         ------------------------------------------------------------------------- */

        // LAYOUT
        $('.properties-listing-header .list-layout .button').click(function () {

            var self = $(this),
                layout = self.data('layout');

            if (!self.hasClass('active')) {
                self.parent().find('.active').removeClass('active');
                self.addClass('active');
                $('.properties-listing .property-list').fadeOut(300, function () {
                    $(this).removeClass('layout-list layout-grid').addClass('layout-' + layout);
                    $(this).fadeIn(300);
                });
            }

        });

        // SEARCH TYPE
        $('.properties-search-type').each(function () {

            var self = $(this),
                inputs = self.find('input[type=radio]');
            inputs.each(function () {
                $(this).change(function () {
                    $('#properties-search-form-swap, #properties-search-form-book, #properties-search-form-rent').hide();
                    $('#properties-search-form-' + $(this).data('type')).show();
                });
            });

        });

        // PRICE FILTER
        $('.properties-search-filter .price-filter .slider-range-container').each(function () {
            if ($.fn.slider) {

                var self = $(this),
                    slider = self.find('.slider-range'),
                    max = slider.data('max') ? slider.data('max') : 10000,
                    step = slider.data('step') ? slider.data('step') : 500,
                    default_max = slider.data('default-max') ? slider.data('default-max') : 1000,
                    currency = slider.data('currency') ? slider.data('currency') : 'Kz',
                    input_to = self.find('.range-to');

                input_to.val(default_max + ' ' + currency);

                slider.slider({
                    animate: true,
                    range: "min",
                    max: max,
                    step: step,
                    value: default_max,
                    slide: function (event, ui) {
                        input_to.val(ui.value + ' ' + currency);
                        preFilterSubmit();
                    }
                });

            }

        });

        $('.properties-search-filter .price-filter.filter-inverted .slider-range-container').each(function () {
            if ($.fn.slider) {

                var self = $(this),
                    slider = self.find('.slider-range'),
                    min = slider.data('min') ? slider.data('min') : 500,
                    max = slider.data('max') ? slider.data('max') : 10000,
                    step = slider.data('step') ? slider.data('step') : 500,
                    default_min = slider.data('default-min') ? slider.data('default-min') : 500,
                    currency = slider.data('currency') ? slider.data('currency') : 'Kz',
                    input_to = self.find('.range-to');

                input_to.val(default_min + ' ' + currency);

                slider.slider({
                    range: "max",
                    min: min,
                    max: max,
                    step: step,
                    value: default_min,
                    slide: function (event, ui) {
                        input_to.val(ui.value + ' ' + currency);
                        preFilterSubmit();
                    }
                });

            }

        });


    });
})(jQuery);
