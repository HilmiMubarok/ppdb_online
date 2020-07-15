$(function () {
    
"use strict";
    
    $('.image-popup').magnificPopup({
        type: 'image',
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side

        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] 
        },
    });

    $(document).ready(function() {
    
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            autoWidth:true,
            autoplay:true,
            autoplayTimeout:2500,
            loop : true,
        })
    });

    $(".file-upload").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    // loader
    var loader = function() {
        setTimeout(function() { 
            if($('#ftco-loader').length > 0) {
                $('#ftco-loader').removeClass('show');
            }
        }, 650);
    };
    loader();


    // dropdown
    $('nav .dropdown').hover(function(){
        var $this = $(this);
        $this.addClass('show');
        $this.find('> a').attr('aria-expanded', true);
        $this.find('.dropdown-menu').addClass('show');
    }, function(){
        var $this = $(this);
            $this.removeClass('show');
            $this.find('> a').attr('aria-expanded', false);
            $this.find('.dropdown-menu').removeClass('show');
    });



});