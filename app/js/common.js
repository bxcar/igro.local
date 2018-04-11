$(document).ready(function () {
    $("#owl-slider").owlCarousel({
        // loop: true,
        // nav: true,
        items: 1,
        singleItem: true,
        dots: true,
        dotsContainer: '#carousel-custom-dots'
    });

    $('.owl-dot').click(function () {
        $("#owl-slider").trigger('to.owl.carousel', [$(this).index(), 300]);
    });
});