jQuery(function ($) {
  wp.customize("bootkit_link_color", function (value) {
    value.bind(function (to) {
      $("a").css("color", to);
    });
  });
});
