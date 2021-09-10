var html = document.documentElement;
var body = document.body;
var footer_height = $("footer").outerHeight(true);
var scroller = {
  target: $(".desktop .scroll-container")[0],
  ease: 0.1, // scroll speed (0.01 = slower, 0.5 = faster)
  endY: 0,
  y: 0,
  resizeRequest: 1,
  scrollRequest: 0
};
var requestId = null;
if ($(".desktop .scroll-container").length) {
  gsap.set(scroller.target, { rotation: 0.001, force3D: true, ease: "none" });
  // window.addEventListener("load", onLoad);
  // function onLoad() {
  updateScroller();
  window.focus();
  window.addEventListener("resize", scroller_onResize);
  document.addEventListener("scroll", scroller_onScroll);
  // }
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

/*
var lastScrollTop = 0;
// element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
window.addEventListener(
  "scroll",
  function () {
    // or window.addEventListener("scroll"....
    var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
    if (st > lastScrollTop) {
      // down scroll code
      console.log('down scroll');
    } else {
      // up scroll code
      console.log('up scroll');
    }
    lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
  },
  false
);
*/
