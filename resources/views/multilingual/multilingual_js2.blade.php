<script type="text/javascript">
    // function googleTranslateElementInit() {
    //     new google.translate.TranslateElement({layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    // }
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({ layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false }, 'google_translate_element');
    }

    // function triggerHtmlEvent(element, eventName) {
    //     var event;
    //     if (document.createEvent) {
    //         event = document.createEvent('HTMLEvents');
    //         event.initEvent(eventName, true, true);
    //         element.dispatchEvent(event);
    //     } else {
    //         event = document.createEventObject();
    //         event.eventType = eventName;
    //         element.fireEvent('on' + event.eventType, event);
    //     }
    // }

    $('.lang-select').click(function() {
        var theLang = $(this).attr('data-lang');
        $('.goog-te-combo').val(theLang);

        // console.log($(this).attr('href'));
        window.location = $(this).attr('href');
        location.reload();
    });
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>