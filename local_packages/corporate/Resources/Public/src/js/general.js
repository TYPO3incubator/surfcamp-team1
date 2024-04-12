window.onscroll = function () {
  scrollFunction()
};

scrollFunction();

function scrollFunction() {
  if (document.documentElement.scrollTop > 50) {
    document.documentElement.classList.add("header-scroll");
  } else {
    document.documentElement.classList.remove("header-scroll");
  }
}
