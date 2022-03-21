(function($) {
    const $wrapperSelector = ".slick-slide";
    const linkDirectWrapperSelector = ".card_title";

    $(document).ready(function() {
        const $body = $("body");

        $body.on("click", $wrapperSelector, function (e) {
            const $this = $(this);
            triggerClick(e, $this);
        });
    });

    function triggerClick(e, $this) {
        e.preventDefault();
        const $thisWrapper = $this.closest($wrapperSelector)
        $thisWrapper.find(linkDirectWrapperSelector + ' a').click();
    }
}(jQuery));