$(document.ready(function() {
  $("a.pageTransition_link").each(function() {
    var tempHref = $(this).getAttribute('href');
    $(this).setAttribute('href', '#');
    $(this).onclick(function() {
      $(".wrap").toggleClass("wrap-collapse");
    });
  });
});
