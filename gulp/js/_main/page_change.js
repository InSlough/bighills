$B.on("page_change", page_change);
function page_change() {
  DEV && console.log("page_change event", requestId);
  // for (let index = SSS; index < requestId; index++) {
  //   console.log(index);
  //   cancelAnimationFrame(index);
  // }
  // SSS = requestId;
  // window.dispatchEvent(new Event("resize"));

  // $B.on("click", '#main-content a[href]:not([href^="#"]):not([href^="javascript"]):not(.no-js)', clickA);
}
// $B.on("click", 'a[href]:not([href^="#"]):not([href^="javascript"]):not(.no-js)', clickA);
function clickA(ev) {
  if (window.location.href != $(this).attr("href") && !$(this).parent().hasClass("no-js")) {
    ev.preventDefault();
    var href = $(this).attr("href"),
      text = $(this).text();
    if (href) {
      showLoading();
      // SSS = 1;
      $("body").css("height", "0");
      window.scrollTo(0, 0);
      setTimeout(() => {
        // window.dispatchEvent(new Event("resize"));
        $(".sl-progress span").css("width", "30%");
        $.ajax({
          url: href,
          cache: false,
          success: function (html) {
            var mc = $(html).find("#main-content"),
              mch = mc.html(),
              title = $(html).filter("title").text(),
              mobMenu = $(html).find(".nav__content").html(),
              slug = mc.data("page-slug");
            $B.find("#main-content").html(mch);
            $B.find(".nav__content").html(mobMenu);
            window.history.pushState(text, title, href);
            document.title = title;
            $("#main-content").attr("data-page-slug", slug).data("page-slug", slug);
            chImageLoading(true);
          },
          error: function (response) {
            console.log("jQuery.ajax error response:", response);
            $("#site-loader").append(`<div class="sl-error">Ошибка: ${response.statusText} (${response.status})</div>`);
            setTimeout(() => hideLoading(), 1200);
          }
        });
      }, 100);
      //
    }
    //
    if ($B.hasClass("nav-active")) $B.removeClass("nav-active");
  }
}
