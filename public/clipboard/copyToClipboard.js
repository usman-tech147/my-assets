(function ($) {

    $.fn.copyToClipboard = function (options) {

        // Meine Default Werte
        var defaults = {
            buttonClass: "copyToClipboard-button",
            buttonText: "Copy",
            themeClass: false,
            callback: false
        }        

        // Optionen
        options = $.extend(defaults, options);


        // the plugin
        return this.each(function (i) {

            var el = $(this);

            // Parent auf Relative
            el.css({ position: 'relative' });

            // 1. Eine Box erstellen die an der richtigen Position im Div ist
            var html = '<div class="' + options.buttonClass + ' ' + ((options.themeClass) ? options.themeClass : "") + '">' + options.buttonText + '</div>'

            // 
            el.append(html);

            // Hover Funktion zum Ein- und Ausblenden der Copy Button
            el.hover(function() {
                el.find('.' + options.buttonClass).show();
            }, function() {
                el.find('.' + options.buttonClass).hide();
            });

            // Click Event
            el.on('click', '.' + options.buttonClass,function() {
                
                var temp = $('<textarea>');
                $("body").append(temp);

                var text = $(el).text().trim();

                // Copy abschneiden
                text = text.substr(0, text.length - options.buttonText.length).trim();


                temp.val(text).select();

                document.execCommand("copy");

                temp.remove();

                // 
                if(typeof options.callback == 'function') {
                    options.callback(text);
                }
            });
        });
    };
})(jQuery);
