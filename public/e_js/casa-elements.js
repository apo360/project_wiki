(function ($) {
    "use strict";

    /* FIX TRIM FOR IE8 */
    if (typeof String.prototype.trim !== 'function') {
        String.prototype.trim = function () {
            return this.replace(/^\s+|\s+$/g, '');
        };
    }

    /* -----------------------------------------------------------------------------

     GLOBAL FUNCTIONS

     ----------------------------------------------------------------------------- */

    /* -------------------------------------------------------------------------
     ACCORDION
     ------------------------------------------------------------------------- */

    $.fn.uouAccordion = function () {

        var self = $(this),
            items = self.find('.accordion-item');

        items.find('.accordion-item-content:visible').css('display', 'block');
        items.find('.accordion-item-content:hidden').css('display', 'none');

        items.find('.accordion-toggle').each(function () {
            $(this).click(function () {

                if (!self.hasClass('type-toggle')) {

                    self.find('.accordion-item.active .accordion-toggle .fa-minus').removeClass('fa-minus').addClass('fa-plus');
                    self.find('.accordion-item.active .accordion-item-content').slideUp(300);
                    self.find('.accordion-item').removeClass('active');

                }

                $(this).find('.fa').toggleClass('fa-plus fa-minus');
                $(this).parents('.accordion-item').toggleClass('active').find('.accordion-item-content').slideToggle(300, function () {
                    if ($(this).is(':visible')) {
                        $(this).css('display', 'block');
                    }
                    else {
                        $(this).css('display', 'none');
                    }
                });

            });
        });

        return false;

    };

    /* -------------------------------------------------------------------------
     ALERT MESSAGES
     ------------------------------------------------------------------------- */

    $.fn.uouAlertMessage = function () {

        var self = $(this),
            close = self.find('.close');
        close.click(function () {
            self.slideUp(300);
        });

    };

    /* -------------------------------------------------------------------------
     CONTACT FORM
     ------------------------------------------------------------------------- */

    $.fn.uouContactForm = function () {

        var form = $(this).prop('tagName').toLowerCase() === 'form' ? $(this) : $(this).find('form'),
            submit_btn = form.find('.submit-btn');

        alert(submit_btn.text);

        form.submit(function (e) {
            e.preventDefault();

            if (!submit_btn.hasClass('loading')) {

                // form not valid
                if (!form.uouFormValid()) {
                    form.find('p.alert-message.warning.validation').slideDown(300);
                    return false;
                }
                // form valid
                else {

                    submit_btn.addClass('loading').attr('data-label', submit_btn.text());
                    submit_btn.text(submit_btn.data('loading-label'));

                    // ajax request
                    $.ajax({
                        type: 'POST',
                        url: form.attr('action'),
                        data: form.serialize(),
                        success: function (data) {

                            form.find('.alert-message.validation').hide();
                            form.prepend(data);
                            form.find('.alert-message.success, .alert-message.phpvalidation').slideDown(300);
                            submit_btn.removeClass('loading');
                            submit_btn.text(submit_btn.attr('data-label'));

                            // reset all inputs
                            if (data.indexOf('success') > 0) {
                                form.find('input, textarea').each(function () {
                                    $(this).val('');
                                });
                            }

                        },
                        error: function () {
                            form.find('.alert-message.validation').slideUp(300);
                            form.find('.alert-message.request').slideDown(300);
                            submit_btn.removeClass('loading');
                            submit_btn.text(submit_btn.attr('data-label'));
                        }
                    });

                }

            }
        });
    };

    /* -------------------------------------------------------------------------
     FORM ELEMENTS
     ------------------------------------------------------------------------- */

    // CHEKCBOX INPUT
    $.fn.uouCheckboxInput = function () {

        var self = $(this),
            input = self.find('input');


        // INITIAL STATE
        if (input.is(':checked')) {
            self.addClass('active');
        }
        else {
            self.removeClass('active');
        }

        // CHANGE STATE
        input.change(function () {
            if (input.is(':checked')) {
                self.addClass('active');
            }
            else {
                self.removeClass('active');
            }
        });

    };

    // RADIO INPUT
    $.fn.uouRadioInput = function () {

        var self = $(this),
            input = self.find('input'),
            group = input.attr('name');

        // INITIAL STATE
        if (input.is(':checked')) {
            self.addClass('active');
        }

        // CHANGE STATE
        input.change(function () {
            var type = input.attr('data-event');
            if (!( type == 'personal' || type == 'online' )) {

                if (group) {
                    $('.radio-input input[name="' + group + '"]').parent().removeClass('active');
                }
                if (input.is(':checked')) {

                    self.addClass('active');

                }
            }
        });

    };

    // SELECT BOX
    $.fn.uouSelectBox = function () {

        var self = $(this),
            select = self.find('select');
        self.prepend('<ul class="select-clone custom-list"></ul>');

        var placeholder = select.data('placeholder') ? select.data('placeholder') : select.find('option:eq(0)').text(),
            clone = self.find('.select-clone');
        self.prepend('<input class="value-holder" type="text" disabled="disabled" placeholder="' + placeholder + '">');
        var value_holder = self.find('.value-holder');

        // INPUT PLACEHOLDER FIX FOR IE
        if ($.fn.placeholder) {
            self.find('input, textarea').placeholder();
        }

        // CREATE CLONE LIST
        select.find('option').each(function () {
            if ($(this).attr('value')) {
                clone.append('<li data-value="' + $(this).val() + '" data-page="' + $(this).attr('data-page') + '">' + $(this).text() + '</li>');
            }
        });

        // TOGGLE LIST
        self.click(function () {
            // var media_query_breakpoint = $.fn.uouMediaQueryBreakpoint();
            // if (media_query_breakpoint > 991) {
            clone.slideToggle(100);
            self.toggleClass('active');
            //}
        });


        // CLICK
        clone.find('li').click(function () {

            value_holder.val($(this).text());
            select.find('option[value="' + $(this).attr('data-value') + '"]').attr('selected', 'selected');

            // IF LIST OF LINKS
            if (self.hasClass('links')) {
                window.location.href = select.val();
            }

        });

        // HIDE LIST
        self.bind('clickoutside', function (event) {
            clone.slideUp(100);
        });

        // LIST OF LINKS
        if (self.hasClass('links')) {
            select.change(function () {
                window.location.href = select.val();
            });
        }

    };

    /* -------------------------------------------------------------------------
     FORM VALIDATION
     ------------------------------------------------------------------------- */

    $.fn.uouFormValid = function () {

        function nameValid(name) {
            // bug � wasn't valid
            name = stripAccentsForm(name);
            return /^[a-zA-Z\s]+$/.test(name)
        }

        function emailValid(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function phoneValid(phone) {
            var validPrefixes = ['91', '92', '93', '96', '21', '22', '23', '24', '25', '26', '27', '28', '29'];

            return ( isNaN(phone)
                || phone.toString().length < 9
                || validPrefixes.indexOf(phone.toString().substring(0, 2)) == -1
            );

        }

        var form = $(this),
            errors = 0;

        form.find('input.required, textarea.required, select.required').each(function () {

            var field = $(this),
                value = field.val();

            if (value.trim() !== '') {

                // name field
                if (field.hasClass('name')) {
                    if (!nameValid(value)) {
                        field.addClass('error');
                        errors++;
                    }
                    else {
                        field.removeClass('error');
                    }
                }

                // email field
                else if (field.hasClass('email')) {
                    if (!emailValid(value)) {
                        field.addClass('error');
                        errors++;
                    }
                    else {
                        field.removeClass('error');
                    }
                }

                // phone field
                else if (field.hasClass('phone')) {
                    if (phoneValid(value)) {
                        field.addClass('error');
                        errors++;
                    }
                    else {
                        field.removeClass('error');
                    }
                }

                // select field
                else if (field.prop('tagName').toLowerCase() === 'select') {

                    if (value === null || value === field.data('placeholder')) {
                        field.addClass('error');
                        field.parents('.select-box').addClass('error');
                        errors++;
                    }
                    else {
                        field.removeClass('error');
                    }
                }

                // default field
                else {
                    field.removeClass('error');
                }

            }
            else {
                field.addClass('error');
                errors++;
            }

        });

        // true if no errors are found
        return !( errors > 0 );

    };

    /* -------------------------------------------------------------------------
     IMAGES LOADED
     ------------------------------------------------------------------------- */

    $.fn.uouImagesLoaded = function (options) {
        if ($.isFunction(options)) {

            var images = $(this).find('img'),
                loaded_images = 0,
                count = images.length;

            if (count > 0) {
                images.one('load', function () {
                    loaded_images++;
                    if (loaded_images === count) {
                        options.call();
                    }
                }).each(function () {
                    if (this.complete) {
                        $(this).load();
                    }
                });
            }
            else {
                options.call();
            }

        }
    };

    /* -------------------------------------------------------------------------
     LIGHTBOX
     ------------------------------------------------------------------------- */

    // LIGHTBOX STRINGS SETUP
    $.extend(true, $.magnificPopup.defaults, {
        tClose: 'Close (Esc)',
        tLoading: 'Loading...',
        gallery: {
            tPrev: 'Previous (Left arrow key)', // Alt text on left arrow
            tNext: 'Next (Right arrow key)', // Alt text on right arrow
            tCounter: '%curr% / %total%' // Markup for "1 of 7" counter
        },
        image: {
            tError: '<a href="%url%">The image</a> could not be loaded.' // Error message when image could not be loaded
        },
        ajax: {
            tError: '<a href="%url%">The content</a> could not be loaded.' // Error message when ajax request failed
        }
    });

    // FUNCTION
    $.fn.uouInitLightboxes = function () {
        if ($.fn.magnificPopup) {
            $(this).find('a.lightbox').each(function () {

                var self = $(this),
                    lightbox_group = self.data('lightbox-group') ? self.data('lightbox-group') : false;

                if (lightbox_group) {
                    $('a.lightbox[data-lightbox-group="' + lightbox_group + '"]').magnificPopup({
                        type: 'image',
                        removalDelay: 300,
                        mainClass: 'mfp-fade',
                        gallery: {
                            enabled: true
                        }
                    });
                }
                else {
                    self.magnificPopup({
                        type: 'image'
                    });
                }

            });
        }
    };

    /* -------------------------------------------------------------------------
     MEDIA QUERY BREAKPOINT
     ------------------------------------------------------------------------- */

    $.fn.uouMediaQueryBreakpoint = function () {

        if ($('#media-query-breakpoint').length < 1) {
            $('body').append('<var id="media-query-breakpoint"><span></span></var>');
        }
        var value = $('#media-query-breakpoint').css('content');
        if (typeof value !== 'undefined') {
            value = value.replace("\"", "").replace("\"", "").replace("\'", "").replace("\'", "");
            if (isNaN(parseInt(value, 10))) {
                $('#media-query-breakpoint span').each(function () {
                    value = window.getComputedStyle(this, ':before').content;
                });
                value = value.replace("\"", "").replace("\"", "").replace("\'", "").replace("\'", "");
            }
            if (isNaN(parseInt(value, 10))) {
                value = 1199;
            }
        }
        else {
            value = 1199;
        }
        return value;

    };

    /* -------------------------------------------------------------------------
     PROGRESS BAR
     ------------------------------------------------------------------------- */

    $.fn.uouProgressBar = function () {

        var self = $(this),
            percentage = self.data('percentage') ? parseInt(self.data('percentage')) : 100,
            inner = self.find('.progress-bar-inner > span'),
            media_query_breakpoint = $.fn.uouMediaQueryBreakpoint();

        // WITH INVIEW ANIMATIONS
        if ($('body').hasClass('enable-inview-animations') && media_query_breakpoint > 991) {
            self.one('inview', function () {
                inner.css('width', percentage + '%');
            });
        }
        // WITHOUT INVIEW ANIMATIONS
        else {
            inner.css('width', percentage + '%');
        }

        // TYPE 2
        if (self.hasClass('type-2')) {

            var button = self.find('.toggle'),
                text = self.find('.progress-bar-text');
            button.click(function () {
                button.find('.fa').toggleClass('fa-plus fa-minus');
                if (text.is(':visible')) {
                    text.css('display', 'block');
                }
                else {
                    text.css('display', 'none');
                }
                text.slideToggle(300);
                self.toggleClass('active');
            });
        }

    };

    /* -------------------------------------------------------------------------
     RADIAL PROGRESS BAR
     ------------------------------------------------------------------------- */

    $.fn.uouRadialProgressBar = function () {

        var self = $(this),
            percentage = self.data('percentage') ? parseInt(self.data('percentage')) : 100,
            html = '',
            media_query_breakpoint = $.fn.uouMediaQueryBreakpoint();

        // CREATE HTML
        html += '<div class="loader"><div class="loader-bg"><div class="text">0%</div></div>';
        html += '<div class="spiner-holder-one animate-0-25-a"><div class="spiner-holder-two animate-0-25-b"><div class="loader-spiner" style=""></div></div></div>';
        html += '<div class="spiner-holder-one animate-25-50-a"><div class="spiner-holder-two animate-25-50-b"><div class="loader-spiner"></div></div></div>';
        html += '<div class="spiner-holder-one animate-50-75-a"><div class="spiner-holder-two animate-50-75-b"><div class="loader-spiner"></div></div></div>';
        html += '<div class="spiner-holder-one animate-75-100-a"><div class="spiner-holder-two animate-75-100-b"><div class="loader-spiner"></div></div></div>';
        html += '</div>';
        self.prepend(html);

        // SET PERCENTAGE FUNCTION
        var set_percentage = function (percentage) {
            if (percentage < 25) {
                var angle = -90 + ( percentage / 100 ) * 360;
                self.find('.animate-0-25-b').css('transform', 'rotate(' + angle + 'deg)');
            }
            else if (percentage >= 25 && percentage < 50) {
                var angle = -90 + ( ( percentage - 25 ) / 100 ) * 360;
                self.find('.animate-0-25-b').css('transform', 'rotate(0deg)');
                self.find('.animate-25-50-b').css('transform', 'rotate(' + angle + 'deg)');
            }
            else if (percentage >= 50 && percentage < 75) {
                var angle = -90 + ( ( percentage - 50 ) / 100 ) * 360;
                self.find('.animate-25-50-b, .animate-0-25-b').css('transform', 'rotate(0deg)');
                self.find('.animate-50-75-b').css('transform', 'rotate(' + angle + 'deg)');
            }
            else if (percentage >= 75 && percentage <= 100) {
                var angle = -90 + ( ( percentage - 75 ) / 100 ) * 360;
                self.find(' .animate-50-75-b, .animate-25-50-b, .animate-0-25-b').css('transform', 'rotate(0deg)');
                self.find('.animate-75-100-b').css('transform', 'rotate(' + angle + 'deg)');
            }
            self.find('.text').html(percentage + '%');
        };

        var clearProgress = function () {
            self.find('.animate-75-100-b, .animate-50-75-b, .animate-25-50-b, .animate-0-25-b').css('transform', 'rotate(90deg)');
        };

        // SET PERCENTAGE
        if ($('body').hasClass('enable-inview-animations') && media_query_breakpoint > 991) {
            self.one('inview', function () {
                for (var i = 0; i <= percentage; i++) {
                    (function (i) {
                        setTimeout(function () {
                            set_percentage(i);
                        }, i * 20);
                    })(i);
                }
            });
        }
        else {
            set_percentage(percentage);
        }

    };

    /* -------------------------------------------------------------------------
     TABBED
     ------------------------------------------------------------------------- */

    $.fn.uouTabbed = function () {

        var self = $(this),
            tabs = self.find('> .tab-title-list > .tab-title'),
            contents = self.find('> .tab-content-list > .tab-content');

        tabs.click(function (e) {
            if (!$(this).hasClass('active')) {
                var index = $(this).index();
                tabs.filter('.active').removeClass('active');
                $(this).addClass('active');
                contents.filter('.active').hide().removeClass('active');
                contents.filter(':eq(' + index + ')').show().addClass('active');

                // CHANGE LOCATION HASH IF NEEDED
                var target = $(e.target);
                if (target.attr('href')) {
                    if (history.pushState) {
                        history.pushState(null, null, target.attr('href'));
                    }
                    else {
                        location.hash = target.attr('href');
                    }
                }
                return false;

            }
        });

    };

    /* -------------------------------------------------------------------------
     TOGGLE
     ------------------------------------------------------------------------- */

    $.fn.uouToggle = function () {

        var self = $(this),
            title = self.find('.toggle-title'),
            content = self.find('.toggle-content');

        title.click(function () {
            self.toggleClass('closed');
            content.slideToggle(200);
        });

    };

})(jQuery);