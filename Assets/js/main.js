/* Tabs */
jQuery('.shortcode_tabs').each(function (index) {
    var i = 1;
    jQuery('.shortcode_tab_item_title').each(function (
        index) {
        jQuery(this).addClass('it' + i);
        jQuery(this).attr('whatopen', 'body' + i);
        jQuery(this).addClass('head' + i);
        jQuery(this).parents('.shortcode_tabs').find(
            '.all_heads_cont').append(this);
        i++;
    });
    var i = 1;
    jQuery('.shortcode_tab_item_body').each(function (
        index) {
        jQuery(this).addClass('body' + i);
        jQuery(this).addClass('it' + i);
        jQuery(this).parents('.shortcode_tabs').find(
            '.all_body_cont').append(this);
        i++;
    });
});
jQuery('.shortcode_tabs .all_body_cont div:first-child')
    .addClass('active');
jQuery(
    '.shortcode_tabs .all_heads_cont div:first-child').addClass(
    'active');

jQuery('.shortcode_tab_item_title').click(function () {
    jQuery(this).parents('.shortcode_tabs').find(
        '.shortcode_tab_item_body').removeClass('active');
    jQuery(this).parents('.shortcode_tabs').find(
        '.shortcode_tab_item_title').removeClass('active');
    var whatopen = jQuery(this).attr('data-open');
    jQuery(this).parents('.shortcode_tabs').find('.' +
        whatopen).addClass('active');
    jQuery(this).addClass('active');
});
/* Tabs */

/* Tooltip  */
jQuery(function ($) {
    $('.tooltip_s').tooltip()
});
/* Tooltip  */

/* Animation */
$(window).scroll(function () {
    $(".animated-area").each(function () {
        if ($(window).height() + $(window).scrollTop() -
            $(this).offset().top > 0) {
            $(this).trigger("animate-it");
        }
    });
});
$(".animated-area").on("animate-it", function () {
    var cf = $(this);
    cf.find(".animated").each(function () {
        $(this).css("-webkit-animation-duration",
            "0.9s");
        $(this).css("-moz-animation-duration", "0.9s");
        $(this).css("-ms-animation-duration", "0.9s");
        $(this).css("animation-duration", "0.9s");
        $(this).css("-webkit-animation-delay", $(this).attr(
            "data-animation-delay"));
        $(this).css("-moz-animation-delay", $(this).attr(
            "data-animation-delay"));
        $(this).css("-ms-animation-delay", $(this).attr(
            "data-animation-delay"));
        $(this).css("animation-delay", $(this).attr(
            "data-animation-delay"));
        $(this).addClass($(this).attr("data-animation"));
    });
});
/* Animation */

/* Counter Number */
(function($) {
    $.fn.countTo = function(options) {
        options = options || {};

        return $(this).each(function() {
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from: $(this).data('from'),
                to: $(this).data('to'),
                speed: $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals: $(this).data('decimals')
            }, options);
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;
            var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

            $self.data('countTo', data);
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);
            render(value);
            function updateTimer() {
                value += increment;
                loopCount++;
                render(value);
                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }
                if (loopCount >= loops) {
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;

                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }
            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };
    $.fn.countTo.defaults = {
        from: 0, // the number the element should start at
        to: 0, // the number the element should end at
        formatter: formatter, // handler for formatting the value before rendering
        onUpdate: null, // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };
    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));
    var count = 0;
    var datanumber;

    if ($(window).width() > 479) {
        $('.number-counter').bind('inview', function(event, visible) {
            if (visible === true & count === 0) {
                count++;
                $('.number-counter').each(function() {
                    datanumber = $(this).attr('data-number'),
                            $(this).find('.number-count').delay(6000).countTo({
                        from: 0,
                        to: datanumber,
                        speed: 1000,
                        refreshInterval: 40
                    });
                });
            } else {
            }
        });
    } else {
        $('.number-count').each(function() {
            $(this).html($(this).parent().attr('data-perc'))
        })
    }

/* Counter Number */










