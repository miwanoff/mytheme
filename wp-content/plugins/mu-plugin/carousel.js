function display_carousel() {
  // …
  // Here we retrieve the links
  // …

  if (!empty($links)) {
    wp_enqueue_script(/* parameters listed above */);

    // …
    // Display
    // …
  }
}
function carousel_show_another_link(direction) {
  var ul = $("#carousel ul");
  var current = -parseInt(ul[0].style.marginLeft) / 100;
  var new_link = current + direction;
}
jQuery(function ($) {
  // The code we will write must be placed here
});
