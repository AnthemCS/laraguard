
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
    require('daterangepicker');
    var feather = require('feather-icons');
    //var popper = require('popper');
    var moment = require('moment');

    window.moment = moment;
    //window.popper = popper;

    //require('startbootstrap-sb-admin');
    require('select2');
    $(function() {

    feather.replace();
        var $duration = $('input[name="daterange"]').daterangepicker({
            "minDate": moment().format("YYYY-MM-DD"),
            locale: {
                format: 'YYYY-MM-DD'
              },
        });

       var $arrival_date = $('input[name="arrival_date"]');
       var $departure_date =  $('input[name="departure_date"]');
       var $nights =  $('input[name="nights"]');

        $duration.on('apply.daterangepicker', function(ev, picker) {

            var arrival_day = new Date(picker.startDate.format('YYYY-MM-DD')).getDay();
            var dep_day = new Date(picker.endDate.format('YYYY-MM-DD')).getDay();

            $arrival_date.val(picker.startDate.format('YYYY-MM-DD'));
            $departure_date.val(picker.endDate.format('YYYY-MM-DD'));

            var day_diff = dep_day - arrival_day;
            if(day_diff < 0){
                day_diff += 7;
            }
            $nights.val((day_diff));

        });

        $(document).ready(function(){
            $('.select2').select2({
                    width: "resolve"
            });

            $('.select2-clients').select2({
                width: "resolve"
            });
        });
    });

} catch (e) {}


/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key',
//     cluster: 'mt1',
//     encrypted: true
// });

