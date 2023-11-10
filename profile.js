$(function () {
  close_modal = function () {
    $("#loginModal").hide()
    $("#sigupModal").hide()
    document.getElementById("errorMessage").style.display = "none";
  }
  sigupconfirm = function () {
    $("#sigupModal").hide()
  }
  login = function () {
    $("#loginModal").show()
    $("#sigupModal").hide()
  }
  sigup = function () {
    $("#sigupModal").show()
    $("#loginModal").hide()
  }
 

});
