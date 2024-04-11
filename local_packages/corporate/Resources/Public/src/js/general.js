
window.onscroll = function () {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header-scroll").style.height = "82px";
    document.getElementById("base-header--logo-desktop").style.display = "none";
    document.getElementById("base-header--logo-mobile").style.display = "flex";
  } else {
    document.getElementById("header-scroll").style.height = "8rem";
    document.getElementById("base-header--logo-desktop").style.display = "flex";
    document.getElementById("base-header--logo-mobile").style.display = "none";
  }
}
