$(function() {
  $("header #nav-main li > a").click(function(e) {
    e.preventDefault();
    var tempHref = this.getAttribute('href');
    function nextPage() { window.location = tempHref; }
    if($('#wrap').hasClass('wrap-collapse')) {
      $("#wrap").removeClass('wrap-collapse').delay(900).nextPage();
    } else {
      $("#wrap").addClass("wrap-collapse").delay(900).nextPage();
    }
  });
});
