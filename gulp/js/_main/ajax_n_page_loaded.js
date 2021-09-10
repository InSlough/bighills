ajax_n_page_loaded();
$B.on("page_change", ajax_n_page_loaded);
$B.on("loaded_reveal", ajax_n_page_reveal);
function ajax_n_page_loaded() {
  // ! for set functions before loading reveal
  if (rSlug() == "home") {
    gsap.set($B.find(".fs-text > div > *"), { opacity: 0, y: 60 });
    gsap.set($B.find(".home-au-image .bg-box"), { y: 50, height: "50%" });
    gsap.set($B.find(".home-au-image .svg-about"), { y: -150 });

    //
  }
}
function ajax_n_page_reveal() {
  if (rSlug() == "home") {
    // markers: true

    gsap.to($B.find(".fs-text > div > *"), { opacity: 1, y: 0, duration: 0.8, stagger: 0.3 });

    let hau_image_ST = { trigger: $B.find(".home-au-image"), start: "top 74%", end: "bottom 74%", scrub: 1.8 };
    gsap.to($B.find(".home-au-image .bg-box"), { y: 0, height: "100%", scrollTrigger: hau_image_ST });
    gsap.to($B.find(".home-au-image .svg-about"), { y: 0, scrollTrigger: hau_image_ST });

    gsap.to(".spl-el-1", {
      scrollTrigger: {
        trigger: ".spl-el-1",
        start: "top 70%",
        end: "bottom 70%",
        toggleActions: "play play none none",
        onEnter: () => triggerSplit(".spl-el-1"),
        onLeave: () => triggerSplit(".spl-el-1")
      }
    });

    //
  }
}

function triggerSplit(name) {
  if (name == ".spl-el-1") Splitting({ target: "[data-splitting]:not(.splitting).spl-el-1", by: "words" });
}
