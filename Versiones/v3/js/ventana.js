$(document).ready(function(){
  fitui();
});
$(window).resize(function(){
  fitui();
});
function fitui(){
  winWid = $(window).width();
  winHei = $(window).height();
  $('.window').css({
    height: winHei*.8,
    width: winWid*.5
  });
  paneHei = $('.window').height();
  paneWid = $('.window').width();
  $('.window').css({
    top: winHei/2 - paneHei/2,
    left: winWid/2 - paneWid/2
  });
}