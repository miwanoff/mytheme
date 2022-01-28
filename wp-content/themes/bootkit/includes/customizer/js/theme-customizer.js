jQuery(function ($) {
  // wp.customize("bootkit_link_color", function (value) {
  //   value.bind(function (to) {
  //     $("a").css("color", to);
  //   });
  // });

  $(document).ready(function(){
    $('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('href', 'javascript:;').addClass('dropdown-toggle');
    $('.dropdown-submenu > a').on("click", function(e) {
    var dropdown = $(this).parent().find(' > .show');
      $('.dropdown-submenu .dropdown-menu').not(dropdown).removeClass('show');
      $(this).next('.dropdown-menu').toggleClass('show');
      e.stopPropagation();
    });
    $('.dropdown').on("hidden.bs.dropdown", function() {
      $('.dropdown-menu.show').removeClass('show');
    });
  });
});

