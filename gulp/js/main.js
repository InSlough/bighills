// ? Main.js
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
jQuery(function ($) {
  //
  var $B = $("body");
  //
  DEV && console.log("Start Site jQuery, site Link:", siteUrl, "| current Link:", window.location.href);

  $B.on("js_loaded", function () {
    window.dispatchEvent(new Event("resize"));

    //
  });

  gsap.set(".site-header > div nav li", { opacity: 0, y: -50 });
  //
  $B.on("loaded_reveal", function () {
    gsap.to(".site-header > div nav li", { opacity: 1, y: 0, duration: 0.5, stagger: 0.25 });

    //
  });

  // $(".i-lazy").lazy();
  // $(".i-lazy:not(.pic_reveal)").lazy({ afterLoad: (el) => $(el).addClass("loaded") });
  // $(".img-lazy").lazy({ afterLoad: (el) => $(el).addClass("loaded") });
  const bgLImg1 = "linear-gradient(115deg, #4e596c 0%, #4e596c 0%, #1f2837 0%, #1f2837 100%)";
  const bgLImg2 = "linear-gradient(115deg, #4e596c 0%, #4e596c 100%, #1f2837 100%, #1f2837 100%)";
  // gsap.fromTo(".img-lazy", { background: bgLImg1 }, { ease: "none", duration: 4, background: bgLImg2, repeat: 1, yoyo: true });


  // $(".datepicker").pickadate({});

  slideToggleElms("init");
  $B.on("click", ".slideToggle, .menu-item", slideToggleElms);
  function slideToggleElms(e) {
    if (e === "init") {
      // $(".slideToggle-content");
      $(".slideToggle-content, .sub-menu").slideToggle(0);
    } else {
      let ce = $(this);
      if (ce.hasClass("menu-item-has-children")) {
        ce.find(".sub-menu").slideToggle("fast");
      }
    }
  }


  $B.on("click", ".menu-icon", function () {
    $B.toggleClass("nav-active");
  });


  function rSlug() {
    return $(document).find("#main-content").data("page-slug");
  }

  function showLoading() {
    $B.removeClass("js-loaded loaded-reveal").addClass("show-loading");
    $(".sl-progress span").css("width", "0%");
  }
  function hideLoading() {
    $B.removeClass("show-loading").addClass("js-loaded").trigger("js_loaded");
    setTimeout(() => ($B.addClass("loaded-reveal").trigger("loaded_reveal"), $("#site-loader .sl-error").remove()), 200);
  }


  window.addEventListener("popstate", function (event) {
    location.reload(); // ? for correct use of back button
  });
  // !
  $B.on("js_loaded", function () {
    window.dispatchEvent(new Event("resize"));
  });
  document.getElementById("defaultOpen").click();
  DEV && console.log("End Site jQuery");
  //
});
// ! Main.js
