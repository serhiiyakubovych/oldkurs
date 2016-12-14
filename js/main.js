$(document).ready(function(){    
    $(window).scroll( fadeNavItemsAfterScroll );
    $('#menu ul a[href^="#"],.menu a[href^="#"]').click( scrollToMenuPoint );
    $('#scrollup').click( scrollUp );
    $('#onmenu').click( switchMenu );
    $('#offmenu').click( switchMenu );
    $('.green-button').click( toggleServiceDetails );
});

function fadeNavItemsAfterScroll() {
    if ($(this).scrollTop() > 100) {
        $('#scrollup').fadeIn();
        $('#onmenu').fadeIn();
    } else {
        $('#scrollup').fadeOut();
        $('#onmenu').fadeOut();
    }
};

function scrollToMenuPoint() {
    var target = $(this).attr('href');
    if (target.length > 1) {
        $('html, body').animate({ scrollTop: $(target).offset().top }, 600);
    } else {
        $("html, body").animate({ scrollTop: 0 }, 600);
    }
    if ($(this).parent().parent().attr('id') === 'menu') {
        $('#menu').animate({ width: 'toggle' }, 600);
    }
    return false;
};

function scrollUp() {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
};

function switchMenu(e) {
    e.preventDefault();
    $('#menu').animate({ width: 'toggle' }, 600);
};

function toggleServiceDetails() {
    $(this).next().slideToggle();
};