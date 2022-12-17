/*************************
 * Summary: JS code common for all pages
 *
 * Pseudocode:
 * Grouped by page/section , and ordered by
 * the closest to the root. If same distance, by alphabetical order.
 * In last, comes vendor/template code
 *
 * Navbar
 * Footer
 *
 *
 * Theme Page
 *
 * Contributors: TL
 *
 *************************
 */


// Strip Accents (to be used for URL writing)
function stripAccents(string) {

    var r = string.toLowerCase();
    r = r.replace(new RegExp("[абвгде]", 'g'), "a");
    r = r.replace(new RegExp("ж", 'g'), "ae");
    r = r.replace(new RegExp("з", 'g'), "c");
    r = r.replace(new RegExp("[ийкл]", 'g'), "e");
    r = r.replace(new RegExp("[мноп]", 'g'), "i");
    r = r.replace(new RegExp("с", 'g'), "n");
    r = r.replace(new RegExp("[туфхц]", 'g'), "o");
    r = r.replace(new RegExp("њ", 'g'), "oe");
    r = r.replace(new RegExp("[щъыь]", 'g'), "u");
    r = r.replace(new RegExp("[эя]", 'g'), "y");
    r = r.replace(new RegExp("[^A-Za-z0-9()]", 'g'), "-");

    return r;

}

// To be used in form validation (eg.: name)
function stripAccentsForm(string) {

    var r = string.toLowerCase();
    r = r.replace(new RegExp("[абвгде]", 'g'), "a");
    r = r.replace(new RegExp("ж", 'g'), "ae");
    r = r.replace(new RegExp("з", 'g'), "c");
    r = r.replace(new RegExp("[ийкл]", 'g'), "e");
    r = r.replace(new RegExp("[мноп]", 'g'), "i");
    r = r.replace(new RegExp("с", 'g'), "n");
    r = r.replace(new RegExp("[туфхц]", 'g'), "o");
    r = r.replace(new RegExp("њ", 'g'), "oe");
    r = r.replace(new RegExp("[щъыь]", 'g'), "u");
    r = r.replace(new RegExp("[эя]", 'g'), "y");

    return r;

}

// Convert RGB color to HEX
function rgb2hex(rgb) {
    if (/^#[0-9A-F]{6}$/i.test(rgb)) return rgb;

    rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    function hex(x) {
        return ("0" + parseInt(x).toString(16)).slice(-2);
    }

    return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

function scrollToElement ( element ) {

    $('html, body').animate({
        scrollTop: $( element ).offset().top
    }, 'slow' );

    return true;

}


// =====================================================================
//                            PAGE CODE
// =====================================================================

$(document).ready(function () {

    // SEARCH TRANSITIONS
    // =====================

    // INITIAL STATE
    // if search is online hide location box and checks online radio button
    if ($('#location_navbar input').val() == 'Online' || $('#location_filter input').val() == '') {

        // main logic
        transitionTo('online');

        moveTab('online');

    }

    // CHANGE STATE
    // changes to online when clicked on the online tab / radio
    $('[data-event = "online"]').click(function () {

        // fall out for a repetition
        if (!$(this).hasClass('active')) {

            transitionTo('online');

            moveTab('online');

        }

    });

    // changes to personal / local when clicked on the personal tab / radio
    $('[data-event = "personal"]').click(function () {

        // fall out for a repetition
        if (!$(this).hasClass('active')) {

            transitionTo('personal');

            moveTab('personal');

        }

    });


    // AUTOCOMPLETE
    // ======================

    $('input[name = "disciplina"]').autocomplete({
        source: "autocomplete.php",
        minLength: 2,
        autoFocus: true
    });


});

/* SEARCH TRANSITIONS
 * navbar, home and search type transitions
 *
 * @param string to - personal or online
 * @param string to - personal or online or false (important to avoid self-clicking)
 */

function transitionTo(to) {

    var from = (to == 'online') ? 'personal' : 'online';

    // INPUTS
    if (to == 'online') {
        // hides
        $('input[name="local"]').attr('value', 'Online').parent().hide();
    }
    else {
        // shows
        $('input[name="local"]').attr('value', '').parent().show();
    }

    // CHECKERS
    $('.radio-input input[data-event="' + from + '"]').parent().removeClass('active');
    $('.radio-input input[data-event="' + to + '"]').parent().addClass('active');

    // DISTANCE
    if (to == 'online') {
        $('.list-sorting button[data-order="2"]').hide();
        $('#distance-filter').hide();
    }
    else {
        $('.list-sorting button[data-order="2"]').show();
        $('#distance-filter').show();
    }

}


function moveTab(to) {

    var from = (to == 'online') ? 'personal' : 'online',
        toTab = $('#tab-home-' + to),
        fromTab = $('#tab-home-' + from);

    // SYNC SUBJECTS
    var subjects = [];
    subjects[0] = $('#search-home input[name = "disciplina"]').val();
    subjects[1] = $('#search-navbar input[name = "disciplina"]').val();

    for (var i = 0; i < subjects.length; i++) {
        if (subjects[i] != '') {
            $('#search-navbar input[name = "disciplina"]').val(subjects[i]);
            $('#search-home input[name = "disciplina"]').val(subjects[i]);
            break;
        }
    }

    // CHANGE TABS
    fromTab.removeClass('active');
    toTab.addClass('active');

    // CHANGE BG
    if ($.fn.owlCarousel) {
        var slideNr = (to == 'online') ? 1 : 0;
        $('#banner .banner-bg').triggerHandler('owl.goTo', slideNr);
    }

}

/* SEARCH FORM SUBMISSION
 * All search forms are stopped on submission (return false)
 * an url is built, based on the corresponding subject and local fields
 * it needs the id of the form that is being submitted.
 */

function urlBuilder(id) {

    var subject = $("#" + id + " input[name = 'disciplina']").val(),
        location = $("#" + id + " input[name = 'local']").val();

    subject = stripAccents(subject);
    location = stripAccents(location);

    window.location.assign("index.php?op=explicadores&local=" + location + "&disciplina=" + subject);

    return false;

}

// Search Modals Submit
// =======================
function modalSubmit(type) {

    switch (type) {

        case 'choose-level':
            var choice = $('#modal-level-select').find(":selected").data('value');

            $('#levels-selector span').removeClass('active');
            $('#levels-selector input').prop('checked', false);
            $('#search-modal').modal('hide');
            $("#level-" + choice).click();
            break;

        case 'choose-location':
            var local = $('#modal-location').val();

            $('#search-location').val(local);
            $('#properties-search-form').submit();
            $('#search-modal').modal('hide');
            break;

        case 'choose-subject':
            var subject = $('#modal-subject').val();

            $('#search-subject').val(subject);
            $('#properties-search-form').submit();
            $('#search-modal').modal('hide');
            break;

    }

}

// onClick of submit buttons
function preSubmit($typeMessage) {

    if ($typeMessage) {

        // Activate Message (textarea)
        $('#submit-form textarea').addClass('required').show();

        // Change to type "message" (0)
        $('#see-number-type').val(0);

        // chosen will mean it was clicked
        $('#send-message').addClass('chosen').removeClass('deactivated').html("<i class='fa fa-envelope'></i> Enviar Mensagem");
        ;
        $('#see-number').addClass('not-chosen');

    }
    else {
        // Deactivate Message (textarea)
        $('#submit-form textarea').removeClass('required').hide().val('');

        // Change to type "see number" (1)
        $('#see-number-type').val(1);

        // chosen will mean it was clicked
        $('#see-number').addClass('chosen');
        $('#send-message').addClass('not-chosen deactivated').html("<i class='fa fa-envelope'></i> Voltar а Mensagem");

    }

}