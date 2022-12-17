(function ($) {
    "use strict";

    $(document).ready(function () {

        // GET ACTUAL MEDIA QUERY BREAKPOINT
        var media_query_breakpoint = $.fn.uouMediaQueryBreakpoint();

        /* -----------------------------------------------------------------------------

         HEADER

         ----------------------------------------------------------------------------- */

        /* -------------------------------------------------------------------------
         HEADER SEARCH
         ------------------------------------------------------------------------- */

        $('.header-search').each(function () {

            var self = $(this),
                search_input = self.find('.search-input input'),
                search_advanced = self.find('.search-advanced');

            // SHOW ADVANCED
            search_input.focus(function () {
                self.addClass('active');
                $(this).addClass('active');
                search_advanced.slideDown(200);
            });

            // HIDE ADVANCED
            self.bind('clickoutside', function () {

                if (media_query_breakpoint > 1199) {
                    search_input.blur();
                    self.removeClass('active');
                    search_input.removeClass('active');
                    search_advanced.slideUp(200);
                    self.find('.select-box .select-clone').slideUp(200);
                }
            });

            // TRANSPLANT CALENDAR BEFORE SHOW
            self.find('.calendar-input').each(function () {

                var self = $(this),
                    widget = self.find('input').datepicker('widget');
                self.find('input').focus(function () {
                    widget.detach().insertAfter(self.parent());
                });

            });

            /*
             // CLOSE ON MOBILE
             search_input.parent().find('.close').click(function () {
             search_input.val('');
             search_input.blur();
             self.removeClass('active');
             search_input.removeClass('active');
             if (search_input.val() === '') {
             search_input.parent().find('.ico').fadeIn(300);
             }
             search_advanced.slideUp(200);
             self.find('.select-box .select-clone').slideUp(200);
             });
             */

        });

        /* -------------------------------------------------------------------------
         HEADER MENU
         ------------------------------------------------------------------------- */

        $('.header-menu').each(function () {

            var self = $(this),
                btn = self.find('.header-btn');

            // HOVER
            self.hover(function () {
                if (media_query_breakpoint > 1199) {
                    self.find('.header-btn').addClass('hover');
                    self.find('.header-nav').show();
                    self.find('.header-nav > ul').stop(true, true).slideDown(200);
                }
            }, function () {
                if (media_query_breakpoint > 1199) {

                    self.find('.header-btn').removeClass('hover');
                    self.find('.header-nav > ul').stop(true, true).delay(10).slideUp(200, function () {
                        self.find('.header-nav').hide();
                    });
                }
            });

            // CLICK
            btn.on('click' , function () {
                if (media_query_breakpoint < 1200) {
                    self.find('.header-btn').toggleClass('hover');
                    self.find('.header-nav').stop(true, true).slideToggle(200);
                }
            });


            // HOVER SUBMENU
            self.find('li.has-submenu').hover(function () {
                if (media_query_breakpoint > 1199) {
                    $(this).addClass('hover');
                    $(this).find('> ul').stop(true, true).fadeIn(200);
                }
            }, function () {
                if (media_query_breakpoint > 1199) {
                    $(this).removeClass('hover');
                    $(this).find('> ul').stop(true, true).delay(10).fadeOut(200);
                }
            });

            // CREATE TOGGLE BUTTONS

            self.find('li.has-submenu').each(function () {
                $(this).append('<button class="submenu-toggle"><i class="fa fa-chevron-down"></i></button>');
            });

            // TOGGLE SUBMENU
            self.find('.submenu-toggle').each(function () {
                $(this).click(function () {
                    $(this).parent().find('> .sub-menu').slideToggle(200);
                    $(this).find('.fa').toggleClass('fa-chevron-down fa-chevron-up');
                });
            });

        });

        /* -------------------------------------------------------------------------
         HEADER LANGUAGE
         ------------------------------------------------------------------------- */

        $('.header-language').each(function () {

            var self = $(this);

            // HOVER
            self.hover(function () {
                if (media_query_breakpoint > 1199) {
                    self.find('.header-btn').addClass('hover');
                    self.find('.header-nav').show();
                    self.find('.header-nav ul').stop(true, true).slideDown(200);
                }
            }, function () {
                if (media_query_breakpoint > 1199) {
                    self.find('.header-btn').removeClass('hover');
                    self.find('.header-nav ul').stop(true, true).delay(10).slideUp(200, function () {
                        self.find('.header-nav').hide();
                    });
                }
            });

        });

        /* -------------------------------------------------------------------------
         HEADER REGISTER
         ------------------------------------------------------------------------- */

        $('.header-register').each(function () {

            var self = $(this),
                form_holder = self.find('.header-form'),
                btn = self.find('.header-btn');

            // HOVER
            self.hover(function () {
                if (media_query_breakpoint > 1199) {
                    self.find('.header-btn').addClass('hover');
                    form_holder.stop(true, true).slideDown(200);
                }
            }, function () {
                if (media_query_breakpoint > 1199) {
                    self.find('.header-btn').removeClass('hover');
                    form_holder.stop(true, true).delay(10).slideUp(200);
                }
            });

            // VALIDATE FORM
            form_holder.find('form').submit(function () {

                var form = $(this);
                if (form.uouFormValid()) {
                    form.find('.alert-message.warning:visible').slideUp(300);
                }
                else {
                    form.find('.alert-message.warning').slideDown(300);
                    return false;
                }

            });

            // TOGGLE
            btn.click(function () {
                if (media_query_breakpoint < 1200) {
                    self.find('.header-btn').toggleClass('hover');
                    form_holder.stop(true, true).slideToggle(200);
                }
            });

        });

        /* -------------------------------------------------------------------------
         HEADER LOGIN
         ------------------------------------------------------------------------- */
        $('#close-login').click(function () {
            console.log("fechar");

            $('.header-login').find('.header-btn').removeClass('hover');
            $('.header-login').find('.header-form').stop(true, true).delay(10).slideUp(200);
        });
        $('.header-login').each(function () {

            var self = $(this),
                form_holder = self.find('.header-form'),
                btn = self.find('.header-btn');

            // HOVER
            self.hover(function () {
                if (media_query_breakpoint > 1199) {
                    self.find('.header-btn').addClass('hover');
                    form_holder.stop(true, true).slideDown(200);
                }
            }, function () {
                if (media_query_breakpoint > 1199) {
                    setTimeout(function () {
                    self.find('.header-btn').removeClass('hover');
                    form_holder.stop(true, true).delay(10).slideUp(200);
                    },10000);

                }
            });


            // VALIDATE FORM
            form_holder.find('form').submit(function () {

                var form = $(this);
                if (form.uouFormValid()) {
                    form.find('.alert-message.warning:visible').slideUp(300);
                }
                else {
                    form.find('.alert-message.warning').slideDown(300);
                    return false;
                }

            });

            // TOGGLE
            btn.click(function () {
                if (media_query_breakpoint < 1200) {
                    self.find('.header-btn').toggleClass('hover');
                    form_holder.stop(true, true).slideToggle(200);
                }
            });

        });

        /* -------------------------------------------------------------------------
         HEADER TOGGLES
         ------------------------------------------------------------------------- */

        // SEARCH TOGGLE
        $('.search-toggle').click(function () {
            if ($('.header-menu').is(':visible')) {
                $('.header-menu, .header-tools').slideUp(300);
            }
            else {
                $('.header-navbar:hidden').show();
            }
            $('.header-search').slideToggle(300, function () {
                if ($('.header-search').is(':hidden') && $('.header-menu').is(':hidden') && $('.header-tools').is(':hidden')) {
                    $('.header-navbar:visible').hide();
                }
            });
        });

        // NAVBAR TOGGLE
        $('.navbar-toggle').click(function () {
            if ($('.header-search').is(':visible')) {
                $('.header-search').slideUp(300);
            }
            else {
                $('.header-navbar:hidden').show();
            }
            $('.header-menu, .header-tools').slideToggle(300, function () {
                if ($('.header-search').is(':hidden') && $('.header-menu').is(':hidden') && $('.header-tools').is(':hidden')) {
                    $('.header-navbar:visible').hide();
                }
            });
        });



    });
})(jQuery);