let siteUrl = window.location.protocol + "//" + window.location.hostname;
let DEV = document.documentElement.classList.contains("dev") || 0;
var isSafari = /constructor/i.test(window.HTMLElement);
if (isSafari) {
  document.getElementsByTagName("html")[0].classList.add("safari");
}

var getUrlParameter = function getUrlParameter(sParam) {
  var sPageURL = window.location.search.substring(1),
    sURLVariables = sPageURL.split("&"),
    sParameterName,
    i;
  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split("=");
    if (sParameterName[0] === sParam) {
      return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
    }
  }
  return false;
};
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
jQuery(function ($) {
  var $B = $("body");
  DEV && console.log("Start Site jQuery, site Link:", siteUrl, "| current Link:", window.location.href);



    function setVH() {
    var dE = document.documentElement,
      wh = window.innerHeight || 0,
      vh = wh / 100 || 0,
      fwh = document.getElementById("fixed-window-height") || 0;
    fwh ? (fwh = fwh.offsetTop) : 0;
    dE.style.setProperty("--h100", (fwh ? (wh != fwh ? fwh : vh * 100) : vh * 100) + "px");
    dE.style.setProperty("--vh1", (fwh ? (wh != fwh ? fwh / 100 : vh) : vh) + "px");
    dE.style.setProperty("--vh100", "calc(var(--vh1, 1vh) * 100)");
  }

    setVH();
  $(window).resize(setVH);
  device.onChangeOrientation(() => setVH);


  var html = document.documentElement;
  var body = document.body;
  var footer_height = $("footer").outerHeight(true);
  var scroller = {
    target: $(".desktop .scroll-container")[0],
    ease: 0.1, 
    endY: 0,
    y: 0,
    resizeRequest: 1,
    scrollRequest: 0
  };
  var requestId = null;
  if ($(".desktop .scroll-container").length) {
    gsap.set(scroller.target, { rotation: 0.001, force3D: true, ease: "none" });
    updateScroller();
    window.focus();
    window.addEventListener("resize", scroller_onResize);
    document.addEventListener("scroll", scroller_onScroll);
  }

    function updateScroller() {
    var resized = scroller.resizeRequest > 0;
    if (resized) {
      var height = scroller.target.clientHeight + footer_height;
      body.style.height = height + "px";
      scroller.resizeRequest = 0;
    }
    var scrollY = window.pageYOffset || html.scrollTop || body.scrollTop || 0;
    scroller.endY = scrollY;
    scroller.y += (scrollY - scroller.y) * scroller.ease;
    if (Math.abs(scrollY - scroller.y) < 0.05 || resized) {
      scroller.y = scrollY;
      scroller.scrollRequest = 0;
    }
    gsap.set(scroller.target, { y: -(scroller.y).toFixed(2), ease: "none" });
    requestId = scroller.scrollRequest > 0 ? requestAnimationFrame(updateScroller) : null;
  }

    function scroller_onScroll() {
    scroller.scrollRequest++;
    if (!requestId) requestId = requestAnimationFrame(updateScroller);
  }
  function scroller_onResize() {
    scroller.resizeRequest++;
    if (!requestId) requestId = requestAnimationFrame(updateScroller);
  }


  var slider = document.querySelector(".horizontal-scroll");
  var isDown = false;
  var startX;
  var scrollLeft;
  if (slider) {
    slider.addEventListener("mousedown", function (e) {
      isDown = true;
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener("mouseleave", function () {
      isDown = false;
    });
    slider.addEventListener("mouseup", function () {
      isDown = false;
    });
    slider.addEventListener("mousemove", function (e) {
      if (!isDown) return;
      e.preventDefault();
      var x = e.pageX - slider.offsetLeft;
      var walk = (x - startX) * 1.366; 
      slider.scrollLeft = scrollLeft - walk;
    });
  }


  $B.on("js_loaded", function () {
    window.dispatchEvent(new Event("resize"));

  });

  gsap.set(".site-header > div nav li", { opacity: 0, y: -50 });
  $B.on("loaded_reveal", function () {
    gsap.to(".site-header > div nav li", { opacity: 1, y: 0, duration: 0.5, stagger: 0.25 });

  });

  const bgLImg1 = "linear-gradient(115deg, #4e596c 0%, #4e596c 0%, #1f2837 0%, #1f2837 100%)";
  const bgLImg2 = "linear-gradient(115deg, #4e596c 0%, #4e596c 100%, #1f2837 100%, #1f2837 100%)";



  slideToggleElms("init");
  $B.on("click", ".slideToggle, .menu-item", slideToggleElms);
  function slideToggleElms(e) {
    if (e === "init") {
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

  siteMovement();
  $(window).on("scroll", siteMovement);
  function siteMovement() {
    if ($(this).scrollTop() >= 30) $B.addClass("site-move");
    else $B.removeClass("site-move"); 
  }
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
      .progress(function (instance, image) {
        $B.trigger("single_image_loaded");
        if (!$B.hasClass("js-loaded")) {
          loadedImageCount++;
          loadingProgress += 60 / numImages;
          if (loadedImageCount == numImages) loadingProgress = 100;
          $(".sl-progress span").css("width", loadingProgress + "%");
        }
      });
  }

  window.addEventListener("popstate", function (event) {
    location.reload(); 
  });
  $B.on("js_loaded", function () {
    window.dispatchEvent(new Event("resize"));
  });

  document.getElementById("defaultOpen").click();

  DEV && console.log("End Site jQuery");
});
function throttle(func, ms) {
  var isThrottled = false,
    savedArgs,
    savedThis;
  function wrapper() {
    if (isThrottled) {
      savedArgs = arguments;
      savedThis = this;
      return;
    }
    func.apply(this, arguments);
    isThrottled = true;
    setTimeout(function () {
      isThrottled = false;
      if (savedArgs) {
        wrapper.apply(savedThis, savedArgs);
        savedArgs = savedThis = null;
      }
    }, ms);
  }
  return wrapper;
}

function saveJSONParse(json, rv) {
  try {
    return JSON.parse(json);
  } catch (e) {
    return !rv ? null : rv;
  }
}

function randID() {
  return "_" + Math.random().toString(36).substr(5, 15);
}

function getRandom(min, max) {
  return Math.random() * (max - min) + min;
}
