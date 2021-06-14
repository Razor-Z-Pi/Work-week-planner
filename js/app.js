$(function() {
    let header = $(".header_Nav");

    $(window).scroll(function() {
        if($(this).scrollTop() > 1) {
            header.addClass("header_fixed");
        } else {
            header.removeClass("header_fixed");
        }
    });
});