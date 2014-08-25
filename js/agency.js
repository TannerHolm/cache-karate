$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 100
        }, 900, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})



// $('.tab').on('click',function (e) {
//     e.preventDefault();
//     var target = this.hash,
//     $target = $(target);
//     $('html, body').stop().animate({
//       'scrollTop': $target.offset().top
//     }, 1500, 'easeInOutExpo', function () {
//       window.location.hash = target;
//     });
//   });