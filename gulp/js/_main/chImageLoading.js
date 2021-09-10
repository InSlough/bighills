chImageLoading();
function chImageLoading(ajax) {
  var numImages = $("#main-content img[src]").length,
    loadedImageCount = 0,
    loadingProgress = 40;
  setTimeout(() => {
    if (loadedImageCount == 0) $(".sl-progress span").css("width", "40%");
  }, 0);
  $("#main-content")
    .imagesLoaded()
    .always(function (instance) {
      $B.trigger("all_images_loaded");
      // console.log("all images loaded");
      if (!$B.hasClass("js-loaded")) {
        if (ajax) {
          hideLoading();
          $B.trigger("page_change");
        } else {
          setTimeout(() => {
            $B.removeClass("show-loading").addClass("js-loaded").trigger("js_loaded");
            setTimeout(() => $B.addClass("loaded-reveal").trigger("loaded_reveal"), 200);
          }, 300);
        }
      }
    })
    // .done(function (instance) { console.log("all images successfully loaded"); })
    // .fail(function () { console.log("all images loaded, at least one is broken"); })
    .progress(function (instance, image) {
      $B.trigger("single_image_loaded");
      if (!$B.hasClass("js-loaded")) {
        loadedImageCount++;
        loadingProgress += 60 / numImages;
        if (loadedImageCount == numImages) loadingProgress = 100;
        $(".sl-progress span").css("width", loadingProgress + "%");
      }
      // var result = image.isLoaded ? "loaded" : "broken"; console.log("image is " + result + " for " + image.img.src);
    });
}
