$(function() {
  $("header #nav-main li > a").click(function(e) {
    e.preventDefault();
    var tempHref = this.getAttribute('href');
    if($('#wrap').hasClass('wrap-collapse')) {
      $("#wrap").removeClass('wrap-collapse');
    } else {
      $("#wrap").addClass("wrap-collapse");
    }
    window.location = tempHref;
  });
});
