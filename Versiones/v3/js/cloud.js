
window.requestAnimFrame = (function() {
  return window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.oRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function(callback) {
      window.setTimeout(callback, 1000 / 60);
    };
})();

var $ = document.getElementById('clds'),
    $$ = document.getElementById('sk'),
    x = 0,
    y = 0,
    a = 0;
var larr = [];
var clarr = [];
var mv = 0;
var pov = 400;

var rot = function() {
  mv++;
  if (mv == pov) {
    mv = 0;
  } else {
    y += 0.1;
  }
  chngV();
}

var chngV = function() {
  var trans = 'translateZ( ' + a + 'px ) rotateX( ' + x + 'deg) rotateY( ' + y + 'deg)';
  $.style.webkitTransform = trans;
  $.style.MozTransform = trans;
  $.style.oTransform = trans;
};

$$.style.webkitPerspective = pov;
$$.style.MozPerspective = pov;
$$.style.oPerspective = pov;

var create = function() {
  clarr = [];
  if ($.hasChildNodes()) {
    while ($.childNodes.length >= 1) {
      $.removeChild($.firstChild);
    }
  }
  for (var i = 0; i < 12; i++) {
    clarr.push(build());
  }
}

var build = function() {
  var div = document.createElement('div');
  div.className = 'bl';
  var x = 256 - (Math.random() * 512);
  var y = 256 - (Math.random() * 512);
  var z = 256 - (Math.random() * 512);

  var trans = 'translateX( ' + x + 'px ) translateY( ' + y + 'px ) translateZ( ' + z + 'px )';
  div.style.webkitTransform = trans;
  div.style.MozTransform = trans;
  div.style.oTransform = trans;
  $.appendChild(div);

  for (var i = 0; i < 5 + Math.round(Math.random() * 12); i++) {
    var c = document.createElement('img');
    c.style.opacity = 0;
    var r = Math.random();
    var img = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/131045/cld1.png';
    (function(img) {
      img.addEventListener('load', function() {
        img.style.opacity = .7;
      })
    })(c);

    c.setAttribute('src', img);
    c.className = 'clay';

    var x = 256 - (Math.random() * 512);
    var y = 256 - (Math.random() * 512);
    var z = 100 - (Math.random() * 200);
    var a = Math.random() * 360;
    var s = .25 + Math.random();
    x *= .2;
    y *= .2;

    c.param = {
      x: x,
      y: y,
      z: z,
      a: a,
      s: s,
      sp: .1 * Math.random()
    };
    var trans = 'translateX( ' + x + 'px ) translateY( ' + y + 'px ) translateZ( ' + z + 'px ) rotateZ( ' + a + 'deg ) scale( ' + s + ' )';
    c.style.webkitTransform = trans;
    c.style.MozTransform = trans;
    c.style.oTransform = trans;
    div.appendChild(c);
    larr.push(c);
  }
  return div;
}

var upd = function() {
  for (var i in larr) {
    var lay = larr[i];
    lay.param.a += lay.param.sp;
    var trans = 'translateX( ' + lay.param.x + 'px ) translateY( ' + lay.param.y + 'px ) translateZ( ' + lay.param.z + 'px ) rotateY( ' + (-y) + 'deg ) rotateX( ' + (-x) + 'deg ) scale( ' + lay.param.s + ')';
    lay.style.webkitTransform = trans;
    lay.style.MozTransform = trans;
    lay.style.oTransform = trans;

  }
  window.requestAnimFrame(upd);
}
setInterval('rot()', 1000 / 30);
create();
upd();








