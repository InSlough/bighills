//

function setVH() {
  var dE = document.documentElement,
    wh = window.innerHeight || 0,
    vh = wh / 100 || 0,
    fwh = document.getElementById("fixed-window-height") || 0;
  fwh ? (fwh = fwh.offsetTop) : 0;
  // console.log(fwh);
  // dE.style.setProperty("--vhPX", vh + "px"); dE.style.setProperty("--fh100", fwh + "px");
  dE.style.setProperty("--h100", (fwh ? (wh != fwh ? fwh : vh * 100) : vh * 100) + "px");
  dE.style.setProperty("--vh1", (fwh ? (wh != fwh ? fwh / 100 : vh) : vh) + "px");
  dE.style.setProperty("--vh100", "calc(var(--vh1, 1vh) * 100)");
}

setVH();
$(window).resize(setVH);
device.onChangeOrientation(() => setVH);
// device.onChangeOrientation((newOrientation) => { console.log(`New orientation is ${newOrientation}`); });
