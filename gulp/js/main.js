// ? Main.js
//= ./_main/global_vars
//= ./_main/before_functions
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
// function clickTub(evt, tubname, tooname) {
//   var i, tabcontent, tablinks;
//   tabcontent = document.getElementsByClassName("tabcontent");
//   for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }
//   tablinks = document.getElementsByClassName("tablinks");
//   for (i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace(" active", "");
//   }
//   document.getElementById(tubname).style.display = "block";
//   document.getElementById(tooname).style.display = "block";
//   evt.currentTarget.className += " active";
// }
// // Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();
jQuery(function ($) {
  //
  var $B = $("body");
  // var $C = $(".i-body");
  //
  DEV && console.log("Start Site jQuery, site Link:", siteUrl, "| current Link:", window.location.href);

  // $B.find('picture > source[type="image/webp"]').each(function (i, el) {
  //   console.log($(el).parent().find("img"));
  //   $(el)
  //     .parent()
  //     .find("img")
  //   });

  //= ./_main/set-vh

  // function changeArchiveView() {}
  // $(window).on("resize", () => changeArchiveView());
  // device.onChangeOrientation((newOrientation) => changeArchiveView());

  //= ./_main/scroll-container.js
  //= ./_main/horizontal-scroll.js
  // = ./_main/followCursor.js
  // = ./_main/buttons.js

  //

  //
  $B.on("js_loaded", function () {
    // if ($('[data-simplebar="init"]').length) $("html").addClass("simplebar-init");
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

  // = ./_main/file_name
  // = ./_main/file_name

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

  // gsap.to(".spl-el-1", { scrollTrigger: { trigger: ".spl-el-1", start: "top 66%", end: "bottom 66%", markers: true, toggleActions: "play play none none", onEnter: () => triggerSplit(".spl-el-1"), onLeave: () => triggerSplit(".spl-el-1") } });
  // function triggerSplit(name) { if (name == ".spl-el-1") Splitting({ target: "[data-splitting]:not(.splitting).spl-el-1", by: "words" }); }

  $B.on("click", ".menu-icon", function () {
    $B.toggleClass("nav-active");
  });

  // if (history.length < 2) $(".nav-back-btn").addClass("d-none");

  function rSlug() {
    return $(document).find("#main-content").data("page-slug");
  }
  // = ./_main/ajax_n_page_loaded.js

  // = ./_main/page_change.js

  function showLoading() {
    $B.removeClass("js-loaded loaded-reveal").addClass("show-loading");
    $(".sl-progress span").css("width", "0%");
  }
  function hideLoading() {
    $B.removeClass("show-loading").addClass("js-loaded").trigger("js_loaded");
    setTimeout(() => ($B.addClass("loaded-reveal").trigger("loaded_reveal"), $("#site-loader .sl-error").remove()), 200);
  }

  //= ./_main/siteMovement.js
  //= ./_main/chImageLoading.js

  window.addEventListener("popstate", function (event) {
    location.reload(); // ? for correct use of back button
  });
  // !
  $B.on("js_loaded", function () {
    // if ($('[data-simplebar="init"]').length) $("html").addClass("simplebar-init");
    window.dispatchEvent(new Event("resize"));
  });

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  // ? OLD
  // setTimeout(() => {
  //   $B.addClass("js-loaded").trigger("js_loaded");
  //   setTimeout(() => $B.addClass("loaded-reveal").trigger("loaded_reveal"), 400);
  // }, 1000);
  // ! OLD
  //
  DEV && console.log("End Site jQuery");
  //
});
//= ./_main/after_functions
// ! Main.js
