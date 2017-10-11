$(function () {
  $('#helper-button').click(function (event) {
    event.preventDefault();
    $('#side-nav').toggle();
  });
});