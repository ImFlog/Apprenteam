$(document).ready(function () {
  $('[data-toggle=offcanvas]').click(function () {
    $('.row-offcanvas').toggleClass('active');
  });

  $('.expand').click(function() {
    this.parentNode.parentNode.getElementsByClassName('panel-body')[0].setAttribute("class", "panel-body show");
    this.setAttribute("class", "expand hidden");
    this.parentNode.getElementsByClassName("hide")[0].setAttribute("class", "hide show");
  });
  $('.hide').click(function() {
    this.parentNode.parentNode.getElementsByClassName('panel-body')[0].setAttribute("class", "panel-body hidden");
    this.setAttribute("class", "hide hidden");
    this.parentNode.getElementsByClassName("expand")[0].setAttribute("class", "expand show");
  });
});