jQuery(document).ready(function ($) {
  $(window).on("load", function () {
    var negativeHeight = 0;
    $(".edit-post-layout__metaboxes .postbox-container .postbox").each(function () {
      let h = $(this).height() + negativeHeight;
      if (h > 700 && !$(this).hasClass("closed")) $(this).addClass("closed");
      negativeHeight += $(this).height();
      // $(this).removeClass("closed");
    });
	window.dispatchEvent(new Event("resize"));
	setTimeout(()=>window.dispatchEvent(new Event("resize")),2000);
  });
});
