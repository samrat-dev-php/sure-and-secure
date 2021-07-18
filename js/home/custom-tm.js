var maAdvancedCarousel = function($scope, $) {
  var maAdvancedCarousel = $scope.find(".tm-slider").eq(0);

      maAdvancedCarousel.each(function(index, el) {
        var mobiles    = jQuery(this).data('mobiles');
        var tabs    = jQuery(this).data('tabs');
        jQuery(this).slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: tabs,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: mobiles,
              slidesToScroll: 1
            }
          }
          ]
      }); 
      });

  }

  // Make sure you run this code under Elementor..
    jQuery(window).on('elementor/frontend/init', function () {
      elementorFrontend.hooks.addAction( 
        'frontend/element_ready/advanced-carousel.default',
         maAdvancedCarousel
      );
  });

