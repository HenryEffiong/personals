$(document).ready(function() {
    //Main Menu
    $(".menu-btn").click(function(){
        $(this).toggleClass("is-active");
        $(".navigation-list").slideToggle();
        $("body").toggleClass("noScroll");
    });
    
    $(".main-navigation .navigation-list > li").click(function(){
        $(this).find(".sub-menu").slideToggle();
    });

    //Toggle Filter
    $(".filter-btn").click(function(){
        $(".filter-box").slideToggle();
        $(".filter-btn .fa").toggleClass("flipped");
    });

    //Toggle Filter
    $(".next-lecture-btn").click(function(){
        $(".next-lecture-box").fadeToggle();
        $("body").toggleClass("noScroll");
        $(".next-lecture-btn .fa").toggleClass("flipped");
    });

    //Bootstrap Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //Image Upload
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".file-upload").on('change', function(){
        readURL(this);
    });

    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });

    //Custom Tabs
    $(".custom-tabs .trigger").on('click', function() {
        var id = $(this).attr('id');
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        $(".custom-tabs-content #content-"+id).removeClass("d-none");
        $(".custom-tabs-content #content-"+id).siblings().addClass("d-none");

        console.log(id)
    });


    //Form
    $(".form-item input, .form-item select, .form-item textarea").focusin(function(){
        $(this).parent(".form-item").addClass("active");
    });

    $(".form-item input, .form-item select, .form-item textarea").focusout(function(){
        $(this).parent(".form-item").removeClass("active");
    });

    //Swiper BEGIN

    //Home Sliders
    var swiper = new Swiper('.swiper-container-home-slider', {
        spaceBetween: 30,
        effect: 'fade',
        speed: 2000,
        centeredSlides: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    var swiper = new Swiper('.swiper-container-home-projects', {
        spaceBetween: 30,
        effect: 'fade',
        speed: 2000,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    //Project Gallery
    var swiper = new Swiper('.swiper-container-project-gallery', {
        spaceBetween: 0,
        loop: true,
        speed: 2000,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            3000: {
                slidesPerView: 8,
            },
            2000: {
                slidesPerView: 6,
            },
            1600: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 3,
            },
            640: {
                slidesPerView: 2,
            },
            320: {
                slidesPerView: 1,
            }
        }
    });

    //Swiper END

    //Poptrox
    $(function() {
        var foo = $('#gallery');
        foo.poptrox({
            usePopupNav: true,
            usePopupCaption: true
        });

    });
    
    

});
