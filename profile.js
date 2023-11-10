$(function () {
  close_modal = function () {
    $("#loginModal").hide()
    $("#sigupModal").hide()
  }
  sigupconfirm = function () {
    $("#sigupModal").hide()
  }
  login = function () {
    $("#loginModal").show()
  }
  sigup = function () {
    $("#sigupModal").show()
  }
  const slidesContainer = $(".slides");
  const slides = $(".slide");
let currentIndex = 0;
  function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      updateSlider();
  }

  function updateSlider() {
      const translateValue = -currentIndex * 100 + "%";
      slidesContainer.css("transform", "translateX(" + translateValue + ")");
  }

  // Auto slide every 3 seconds (adjust as needed)
  setInterval(nextSlide, 3000);
});
