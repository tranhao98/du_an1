jQuery(document).ready(function($) {


    "use strict";

    // Page loading animation

    $("#preloader").animate({
        'opacity': '0'
    }, 1000, function() {
        setTimeout(function() {
            $("#preloader").css("visibility", "hidden").fadeOut();
        }, 300);
    });




    $(function() {
        $("#tabs").tabs();
    });

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var box = $('.header-text').height();
        var header = $('header').height();

        if (scroll >= box - header) {
            $("header").addClass("background-header");
        } else {
            $("header").removeClass("background-header");
        }
    });

    if ($('.owl-clients').length) {
        $('.owl-clients').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            items: 1,
            margin: 30,
            autoplay: false,
            smartSpeed: 700,
            autoplayTimeout: 6000,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                460: {
                    items: 1,
                    margin: 0
                },
                576: {
                    items: 2,
                    margin: 20
                },
                992: {
                    items: 3,
                    margin: 30
                }
            }
        });
    }
    $('.dropdown-toggle').dropdown();
    $('.carousel').carousel();
    if ($('.owl-banner').length) {
        $('.owl-banner').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            items: 1,
            margin: 0,
            autoplay: false,
            smartSpeed: 700,
            autoplayTimeout: 6000,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                460: {
                    items: 1,
                    margin: 0
                },
                576: {
                    items: 1,
                    margin: 20
                },
                992: {
                    items: 1,
                    margin: 30
                }
            }
        });
    }
});

function readURL(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-upload-wrap1').hide();

            $('.file-upload-image1').attr('src', e.target.result);
            $('.file-upload-content1').show();

            $('.image-title1').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload();
    }
}
//hinh2
function readURL2(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-upload-wrap2').hide();

            $('.file-upload-image2').attr('src', e.target.result);
            $('.file-upload-content2').show();

            $('.image-title2').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload2();
    }
}
//hinh3
function readURL3(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-upload-wrap3').hide();

            $('.file-upload-image3').attr('src', e.target.result);
            $('.file-upload-content3').show();

            $('.image-title3').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload3();
    }
}
//hinh4
function readURL4(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-upload-wrap4').hide();

            $('.file-upload-image4').attr('src', e.target.result);
            $('.file-upload-content4').show();

            $('.image-title4').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload4();
    }
}
//hinh5
function readURL5(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-upload-wrap5').hide();

            $('.file-upload-image5').attr('src', e.target.result);
            $('.file-upload-content5').show();

            $('.image-title5').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload5();
    }
}
//hinh6
function readURL6(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-upload-wrap6').hide();

            $('.file-upload-image6').attr('src', e.target.result);
            $('.file-upload-content6').show();

            $('.image-title6').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload6();
    }
}

function readURLanhdaidien(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-upload-wrap-anhdaidien').hide();

            $('.file-upload-image-anhdaidien').attr('src', e.target.result);
            $('.file-upload-content-anhdaidien').show();

            $('.image-title-anhdaidien').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUploadanhdaidien();
    }
}

function removeUpload() {
    $('.file-upload-input1').replaceWith($('.file-upload-input1').clone());
    $('.file-upload-content1').hide();
    $('.image-upload-wrap1').show();
}
$('.image-upload-wrap1').bind('dragover', function() {
    $('.image-upload-wrap1').addClass('image-dropping');
});
$('.image-upload-wrap1').bind('dragleave', function() {
    $('.image-upload-wrap1').removeClass('image-dropping');
});
//hình 2
function removeUpload2() {
    $('.file-upload-input2').replaceWith($('.file-upload-input2').clone());
    $('.file-upload-content2').hide();
    $('.image-upload-wrap2').show();
}
$('.image-upload-wrap2').bind('dragover', function() {
    $('.image-upload-wrap2').addClass('image-dropping');
});
$('.image-upload-wrap2').bind('dragleave', function() {
    $('.image-upload-wrap2').removeClass('image-dropping');
});
//hình 3
function removeUpload3() {
    $('.file-upload-input3').replaceWith($('.file-upload-input3').clone());
    $('.file-upload-content3').hide();
    $('.image-upload-wrap3').show();
}
$('.image-upload-wrap3').bind('dragover', function() {
    $('.image-upload-wrap3').addClass('image-dropping');
});
$('.image-upload-wrap3').bind('dragleave', function() {
    $('.image-upload-wrap3').removeClass('image-dropping');
});
//hình 4
function removeUpload4() {
    $('.file-upload-input4').replaceWith($('.file-upload-input4').clone());
    $('.file-upload-content4').hide();
    $('.image-upload-wrap4').show();
}
$('.image-upload-wrap4').bind('dragover', function() {
    $('.image-upload-wrap4').addClass('image-dropping');
});
$('.image-upload-wrap4').bind('dragleave', function() {
    $('.image-upload-wrap4').removeClass('image-dropping');
});
//hình 5
function removeUpload5() {
    $('.file-upload-input5').replaceWith($('.file-upload-input5').clone());
    $('.file-upload-content5').hide();
    $('.image-upload-wrap5').show();
}
$('.image-upload-wrap5').bind('dragover', function() {
    $('.image-upload-wrap5').addClass('image-dropping');
});
$('.image-upload-wrap5').bind('dragleave', function() {
    $('.image-upload-wrap5').removeClass('image-dropping');
});
//hình 6
function removeUpload6() {
    $('.file-upload-input6').replaceWith($('.file-upload-input6').clone());
    $('.file-upload-content6').hide();
    $('.image-upload-wrap6').show();
}
$('.image-upload-wrap6').bind('dragover', function() {
    $('.image-upload-wrap6').addClass('image-dropping');
});
$('.image-upload-wrap6').bind('dragleave', function() {
    $('.image-upload-wrap6').removeClass('image-dropping');
});

function removeUploadanhdaidien() {
    $('.file-upload-input-anhdaidien').replaceWith($('.file-upload-input-anhdaidien').clone());
    $('.file-upload-content-anhdaidien').hide();
    $('.image-upload-wrap-anhdaidien').show();
}
$('.image-upload-wrap-anhdaidien').bind('dragover', function() {
    $('.image-upload-wrap-anhdaidien').addClass('image-dropping');
});
$('.image-upload-wrap-anhdaidien').bind('dragleave', function() {
    $('.image-upload-wrap-anhdaidien').removeClass('image-dropping');
});