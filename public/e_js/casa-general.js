(function ($) {
    "use strict";

    $(document).ready(function () {
        /* -----------------------------------------------------------------------------

         GENERAL

         ----------------------------------------------------------------------------- */

        // GET ACTUAL MEDIA QUERY BREAKPOINT
        var media_query_breakpoint = $.fn.uouMediaQueryBreakpoint();

        // INPUT PLACEHOLDER FIX FOR IE
        if ($.fn.placeholder) {
            $('input, textarea').placeholder();
        }

        // ACCORDIONS
        $('.accordion-container').each(function () {
            $(this).uouAccordion();
        });

        // ALERT MESSAGES
        $('.alert-message').each(function () {
            $(this).uouAlertMessage();
        });

        // FORM ELEMENTS
        $('.checkbox-input').each(function () {
            $(this).uouCheckboxInput();
        });
        $('.radio-input').each(function () {
            $(this).uouRadioInput();
        });
        $('.select-box').each(function () {
            $(this).uouSelectBox();
        });

        // DATE PICKER
        $('.calendar-input').each(function () {

            var input = $(this).find('input'),
                dateformat = input.data('dateformat') ? input.data('dateformat') : 'm/d/y',
                icon = $(this).find('.fa'),
                widget = input.datepicker('widget');

            input.datepicker({
                dateFormat: dateformat,
                minDate: 0,
                beforeShow: function () {
                    input.addClass('active');
                },
                onClose: function () {
                    input.removeClass('active');
                    // TRANSPLANT WIDGET BACK TO THE END OF BODY IF NEEDED
                    widget.hide();
                    if (!widget.parent().is('body')) {
                        widget.detach().appendTo($('body'));
                    }
                }
            });
            icon.click(function () {
                input.focus();
            });

        });

        // LIGHTBOXES
        $('body').uouInitLightboxes();

        // PROGRESS BARS
        $('.progress-bar').each(function () {
            $(this).uouProgressBar();
        });
        $('.radial-progress-bar').each(function () {
            $(this).uouRadialProgressBar();
        });

        // TABS
        $('.tabs-container').each(function () {
            $(this).uouTabbed();
        });

        // TOGGLES
        $('.toggle-container').each(function () {
            $(this).uouToggle();
        });


        /* -----------------------------------------------------------------------------

         SCREEN RESIZE

         ----------------------------------------------------------------------------- */

        $(window).resize(function () {
            if ($.fn.uouMediaQueryBreakpoint() !== media_query_breakpoint) {
                media_query_breakpoint = $.fn.uouMediaQueryBreakpoint();

                /* RESET HEADER ELEMENTS */
                $('.header-navbar, .header-form, .header-nav, .header-nav ul, .header-menu, .header-search, .header-tools, .sub-menu').removeAttr('style');
                $('.submenu-toggle .fa').removeClass('fa-chevron-up').addClass('fa-chevron-down');
                $('.header-btn').removeClass('hover');

            }

        });

    });
})(jQuery);