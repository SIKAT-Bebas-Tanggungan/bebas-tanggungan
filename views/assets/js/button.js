function goBack() {
    window.history.back();
  }

window.onscroll = function () {
    const backToTopButton = document.getElementById("backToTop");
    if (
      document.body.scrollTop > 100 ||
      document.documentElement.scrollTop > 100
    ) {
      backToTopButton.style.display = "block";
    } else {
      backToTopButton.style.display = "none";
    }
  };

document.getElementById("backToTop").onclick = function (event) {
    event.preventDefault(); 
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  };