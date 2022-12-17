/*************************
 * Summary: Center for all analytics events handling
 *
 * Structure:
 *
 *
 *
 * Contributors: TL
 *
 *************************
 */

/**
 * event handler for several analytics platforms
 *
 * @param name    string
 * @param data    array
 * @param handler string ( ga = Google Analytics ; fb = Facebook ; mp = Mixpanel )
 */
function event(name, handler, data) {

    /**
     * List of possible $event:
     *
     * STUDENT SIDE
     * ==================
     * submittedRequest
     *
     * TUTOR SIDE
     * ==================
     * tutorRegistered
     *
     */

    // Google Analytics
    if (handler == null || handler == 'ga') {

        var value = ( name == 'submittedRequest' || name == 'tutorRegistered' ) ? 1 : '' ,
            category = 'clicks';

        switch (name) {
            case 'searched':
            case 'viewedProfile':
                category = 'views';
                break;

            default:
                break;

        }

        // lose the 's' from the end
        action = category.slice(0, -1);

        ga('send', 'event', category, action, name , value);

    }

    // Facebook
    if (handler == null || handler == 'fb') {

        var fbEvent = name;
        switch (name) {

            case 'submittedRequest':
                fbEvent = 'Lead';
                break;

            case 'tutorRegistered':
                fbEvent = 'CompleteRegistration';
                break;

            default:
                break;
        }
                
        fbq('track', fbEvent , { value: 1.00 , currency: 'EUR' });

    }


    // Mixpanel
    if (handler == null || handler == 'mp') {

        // to be developed

    }

}

/**
 * Repeats event sending for each of the handlers
 *
 * @param name string
 * @param handlers array
 * @param data array
 */

function eventHandlers(name, handlers, data) {

    for (i = 0; i < handlers.length; i++) {
        event(name, handlers[i], data);
    }

}