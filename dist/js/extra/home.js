jQuery(function ($) {
  console.log("home.js Start");
  var $B = $("body");
  var sw = window.innerWidth;
  $(window).on("resize", updateSW);
  function updateSW() {
    sw = window.innerWidth;
  }
  const sbp = {
    sm: 567,
    md: 768,
    lg: 992,
    xl: 1200,
    xxl: 1400,
    exl: 1760
  };








  function triggerSplit(name) {
    if (name == ".spl-el-1") Splitting({ target: "[data-splitting]:not(.splitting).spl-el-1", by: "words" });
  }

  const eventsSlider = tns({
    container: ".events-slider",
    mode: "gallery",
    controls: false,
    nav: false,
    autoHeight: true
  });
  $("body").on("click", "#es-nav-prev", () => eventsSlider.goTo("prev"));
  $("body").on("click", "#es-nav-next", () => eventsSlider.goTo("next"));

  const servicesSlider = tns({
    container: ".home-sr-items",
    nav: false,
    loop: false,
    controls: false,
    autoHeight: false,
    responsive: {
      0: {
        fixedWidth: 308 - 12,
        gutter: 12
      },
      768: {
        gutter: 24,
        fixedWidth: 249 - 24
      },
      992: {
        fixedWidth: 299 - 24
      },
      1200: {
        fixedWidth: 239 - 24
      },
      1400: {
        fixedWidth: 279 - 24
      },
      1760: {
        fixedWidth: 364 - 24
      }
    }
  });
  $("body").on("click", "#sr-nav-prev", () => servicesSlider.goTo("prev"));
  $("body").on("click", "#sr-nav-next", () => servicesSlider.goTo("next"));

  console.log("home.js END");
});