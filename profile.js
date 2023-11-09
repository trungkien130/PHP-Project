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
  function checkPassword() {
    if (password >= 6 && !password.incluse('')) {

    } else {
      $("#error-message").text("Mật khẩu phải gồm ít nhất 6 ký tự và không có khoảng trắng.");
    }
  }
  sigup = function () {
    $("#sigupModal").show()
  }
})