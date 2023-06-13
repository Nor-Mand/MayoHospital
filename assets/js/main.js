jQuery(document).ready(function ($) {
  // add boostrap class
  $("#Menu li").addClass("nav-item");
  $("#Menu li a").addClass("nav-link");

  $(".multi-field-wrapper").each(function () {
    var $wrapper = $(".multi-fields", this);
    $(".add-field", $(this)).click(function (e) {
      $(".multi-field:first-child", $wrapper)
        .clone(true)
        .appendTo($wrapper)
        .find("input")
        .val("")
        .focus();
    });
    $(".multi-field .remove-field", $wrapper).click(function () {
      if ($(".multi-field", $wrapper).length > 1)
        $(this).parent(".multi-field").remove();
    });
  });
  console.log("hello");
});
