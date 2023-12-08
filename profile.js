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
    $("#sigupModal").hide()
  }
  sigup = function () {
    $("#sigupModal").show()
    $("#loginModal").hide()
  }

});
const a=21
document.getElementById("#myInput").id =a
console.log(document.getElementById("myInput").id);