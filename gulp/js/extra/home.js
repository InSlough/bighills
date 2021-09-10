//
jQuery(function ($) {
  console.log("home.js Start");
  //
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

  // gsap.set(".fs-text > div > *", { opacity: 0, y: 60 });
  // gsap.to(".fs-text > div > *", { opacity: 1, y: 0, duration: 0.8, stagger: 0.3 });

  // let hau_image_ST = { trigger: ".home-au-image", start: "-50% 74%", end: "125% 74%", scrub: 1.8, markers: false };
  // gsap.set(".home-au-image .svg-img", { y: -150 });
  // gsap.to(".home-au-image .svg-img", { y: 0, scrollTrigger: hau_image_ST });
  // gsap.set(".home-au-image .bg-box", { y: 50, height: "50%" });
  // gsap.to(".home-au-image .bg-box", { y: 0, height: "100%", scrollTrigger: hau_image_ST });

  // if (sw >= sbp.md) {
  //   gsap.set(".home-ev-image", { y: "30%" });
  //   gsap.to(".home-ev-image", { y: "-10%", scrollTrigger: { trigger: ".home-ev-image", start: "-50% 74%", end: "50% 74%", scrub: 4, markers: false } });

  //   gsap.set("#services h2", { y: 0 });
  //   gsap.to("#services h2", { y: 300, scrollTrigger: { trigger: "#services h2", start: "0% 34%", end: "300px 34%", scrub: 1.2, markers: false } });
  // }

  // if (sw > sbp.xl) {
  //   gsap.set("#about .box-link", { y: 0 });
  //   gsap.to("#about .box-link", { y: 300, scrollTrigger: { trigger: "#about .box-link", start: "0% 34%", end: "300px 34%", scrub: 1.2, markers: false } });
  // }

  // // gsap.set(".home-sr-item.i2", { y: "25%" });
  // // gsap.to(".home-sr-item.i2", { y: "0%", scrollTrigger: { trigger: ".home-sr-items", start: "-50% 74%", end: "150% 74%", scrub: 4, markers: false } });
  // // gsap.set(".home-sr-item.i3", { y: "50%" });
  // // gsap.to(".home-sr-item.i3", { y: "0%", scrollTrigger: { trigger: ".home-sr-items", start: "-50% 74%", end: "150% 74%", scrub: 4, markers: false } });

  // gsap.to(".spl-el-1", {
  //   scrollTrigger: {
  //     trigger: ".spl-el-1",
  //     start: "top 70%",
  //     end: "bottom 70%",
  //     toggleActions: "play play none none",
  //     onEnter: () => triggerSplit(".spl-el-1"),
  //     onLeave: () => triggerSplit(".spl-el-1")
  //   }
  // });

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

  //
  console.log("home.js END");
});
