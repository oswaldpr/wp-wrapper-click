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
        const isLink = e.target ? e.target.nodeName.toLowerCase() === 'a' : false;
        if(!isLink){
            const $thisWrapper = $this.closest($wrapperSelector)
            const link = $thisWrapper.find(linkDirectWrapperSelector + ' a');
            const url = link.attr('href');
            const targetBlank = link.attr('target') === "_blank";
            if(targetBlank){
                window.open(url, '_blank').focus();
            } else {
                window.location.href = url;
            }
        }
    }
}(jQuery));