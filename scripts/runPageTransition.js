$(function() {
  $("#menu-primary-navigation > li > a").click(function() {
    var tempHref = this.getAttribute('href');
    if($('#wrap').hasClass('wrap-collapse')) {
      $("#wrap").removeClass('wrap-collapse');
    } else {
      $("#wrap").addClass("wrap-collapse");
    }
    $.delay(1000);
  });
});
