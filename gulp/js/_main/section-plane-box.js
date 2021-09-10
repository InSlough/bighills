$("section.plane-box").each(function (index, el) {
  var imgC = $(el).find("> .bg-image");
  var img = $(el).find("> .bg-image img");
  var st = $(el).find(".sub-title > *");
  var t = $(el).find(".title");
  var btn = $(el).find(".btn");
  // var mobile = $("html").hasClass("mobile");
  var mobile = false;

  if (!mobile) {
    gsap.fromTo(
      img,
      { opacity: 0.5, scale: 1.8 },
      {
        scrollTrigger: {
          trigger: imgC,
          start: "top 60%",
          end: "bottom 80%",
          scrub: 0.5
          // markers: true
        },
        opacity: 1,
        scale: 1
      }
    );

    var trPos = "60% 85%";
    var tgAct = "play none reverse none";
    var dur = 0.766;
    gsap.fromTo(
      st,
      { y: -100, opacity: 0 },
      { scrollTrigger: { trigger: t, start: trPos, end: trPos, toggleActions: tgAct }, y: 0, opacity: 1, stagger: 0.15, duration: dur }
    );
    gsap.fromTo(
      t,
      { scale: 1.2, opacity: 0 },
      { scrollTrigger: { trigger: t, start: trPos, end: trPos, toggleActions: tgAct }, scale: 1, opacity: 1, delay: dur * 0.7, duration: dur }
    );
    gsap.fromTo(
      btn,
      { x: -120, opacity: 0 },
      { scrollTrigger: { trigger: t, start: trPos, end: trPos, toggleActions: tgAct }, x: 0, opacity: 1, delay: dur * 1.4, duration: dur }
    );
  }
  // !END
});
