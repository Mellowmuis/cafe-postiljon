jQuery(document).ready(function($) {
  var s = window.location.href + '/';
  if (s.indexOf("/drankenkaart/") > -1) {
    $(".wprmm_menu").css("display", "block");
  } else {
    $(".menu-menukaart-button").click(function() {
      $(".wprmm_menu").css("display", "none");
      if ($(this).hasClass("menu1")) {
        $("#wprmm_menu_3").fadeIn("slow");

      } else if ($(this).hasClass("menu2")) {
        $("#wprmm_menu_4").fadeIn("slow");

      } else {
        $("#wprmm_menu_5").fadeIn("slow");
      }
      event.preventDefault();
    });
  }
});
