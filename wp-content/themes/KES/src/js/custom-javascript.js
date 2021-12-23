// Add your JS customizations here
(function ($) {
    $(document).ready(function () {
        new PhotoSphereViewer.Viewer({
            panorama: 'http://localhost:8888/kes/wp-content/uploads/2021/12/kes360.jpg',
            container: 'photosphere',

            defaultLat: 0.09,
            defaultZoomLvl: 100,
            defaultLong: -2.2,
            touchmoveTwoFingers: true,
            mousewheel: false,
            navbar: [
                'autorotate',
                'zoomIn',
                'zoomOut',
                'fullscreen'
            ]
        });
    });
    $(document).ready(function () {
        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            // fade: true,
            cssEase: 'linear',
            autoplay:true
        });
    });
})(jQuery);