$(document.ready(function() {
  $("#menu-primary-navigation > li > a").each(function() {
    var tempHref = $(this).getAttribute('href');
    $(this).setAttribute('href', '#');
    $(this).onclick(function() {
      $("#wrap").toggleClass("wrap-collapse");
    });
  });
});
