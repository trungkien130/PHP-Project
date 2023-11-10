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
})
