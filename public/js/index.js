$('.nav-wrapper ul li').click(function() {
    $(this).siblings('li').removeClass('active');
    $(this).addClass('active');
});
