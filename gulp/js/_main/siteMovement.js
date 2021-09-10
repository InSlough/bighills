siteMovement();
$(window).on("scroll", siteMovement);
function siteMovement() {
  if ($(this).scrollTop() >= 30) $B.addClass("site-move");
  else $B.removeClass("site-move"); // site on the top
}
