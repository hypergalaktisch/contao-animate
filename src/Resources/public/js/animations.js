function xlAnimations() {
    $('.xl-animate').each(function () {
        if ($(this).hasClass("animated-visible")) {
            var effect = "animated " + $(this).data("effect");
            var delay = $(this).data("delay");
            if (delay > 0) {
                $(this).delay(delay).queue(function () {
                    $(this).css('visibility', 'visible').addClass(effect);
                });
            } else {
                $(this).css('visibility', 'visible').addClass(effect);
            }
        }
    });
}
$(document).ready(function () {
    $('.xl-animate').viewportChecker({
        classToAdd: 'animated-visible'
    });

    xlAnimations();
});

$(window).scroll(function () {
    xlAnimations();
});
