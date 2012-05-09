$(function() {
  $("header #nav-main li > a").click(function(e) {
    e.preventDefault();
    var tempHref = this.getAttribute('href');
    if($('#wrap').hasClass('wrap-collapse')) {
      $("#wrap").removeClass('wrap-collapse');
    } else {
      $("#wrap").addClass("wrap-collapse");
    }
    setTimeout(function() { window.location = tempHref; }, 900);
  });
});

/*$(function() {
  $("header #nav-main li > a").click(function(e) {
    e.preventDefault();
    var tempHref = this.getAttribute('href');
    var nextPage = function(x) { window.location = x; };
    if($('#wrap').hasClass('wrap-collapse')) {
      $("#wrap").removeClass('wrap-collapse').delay(900).nextPage(tempHref);
    } else {
      $("#wrap").addClass("wrap-collapse").delay(900).nextPage(tempHref);
    }
  });
});*/
