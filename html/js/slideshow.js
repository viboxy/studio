$(document).ready(function ($) {
    $("#webSlideshow > div:gt(0)").hide();

    setInterval(function() {
        $('#webSlideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#webSlideshow');
    }, 3000);

    $("#mobileSlideshow > div:gt(0)").hide();

    setInterval(function() {
        $('#mobileSlideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#mobileSlideshow');
    }, 3000);
});
