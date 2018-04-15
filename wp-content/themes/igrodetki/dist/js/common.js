$(document).ready(function () {
    $("#owl-slider").owlCarousel({
        items: 1,
        singleItem: true,
        dots: true,
        dotsContainer: '#carousel-custom-dots'
    });

    $("#owl-slider-v2").owlCarousel({
        items: 1,
        singleItem: true,
        dots: true,
        dotsContainer: '#carousel-custom-dots',
        animateOut: 'fadeOut',
        autoHeight:true
    });

    $('.owl-dot').click(function () {
        $("#owl-slider").trigger('to.owl.carousel', [$(this).index(), 300]);
        $("#owl-slider-v2").trigger('to.owl.carousel', [$(this).index(), 300]);
    });
});