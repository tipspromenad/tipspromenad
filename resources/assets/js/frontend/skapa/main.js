$(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });

  if($('.collapsable').is(':visible')){
    $('#test').addClass("col-xs-6 sidebar-offcanvas affix-top visible-xs")
  }

  var wheight = $(window).height();

$('#ulScroll').slimScroll({
  height: wheight - (150) + 'px'
});
var $sidebar = $('#sidebar');

function checkSidebarCanvas () {
 if ($(window).width() >= 767) {
  var sidebarWidth = $sidebar.width();
  console.log('sidebarWidth: ' + sidebarWidth);
  $('#sidebarAffix').css('width', sidebarWidth);
   $sidebar.removeClass("col-xs-6 sidebar-offcanvas affix-top bg-gray-lighter");
 }
 else if ($(window).width() < 767) {
   $sidebar.addClass("sidebar-offcanvas bg-gray-lighter affix-top");
 }
}
checkSidebarCanvas();

  $(window).resize(function() {
    if ($(this).width() >= 1280) {
      checkSidebarCanvas();
    }
    else if ($(this).width() < 767) {
      checkSidebarCanvas();
    }
  });
});
