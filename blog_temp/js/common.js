var scrollElm = (function () {
  if ('scrollingElement' in document) {
    return document.scrollingElement;
  }
  if (navigator.userAgent.indexOf('WebKit') != -1) {
    return document.body;
  }
  return document.documentElement;
})();

$(document).on('click', 'a[href^="#"]', function () {
  var speed = 800;
  var href = $(this).attr("href");
  var wh = $(href == "#" ? 'html' : href).offset().top;
  $(scrollElm).animate({
    scrollTop: wh
  }, speed);
  return false;
});

jQuery(function ($) {
  $(".mv-slick").slick({
    arrows: true,
    dots: false,
    autoplay: false
  });
  $(document).ready(function () {
    $("body").css("opacity", "1");
  });
  $(window).on('load scroll resize', function () {
    var ww = $(window).outerWidth();
    var st = $(window).scrollTop();
    if (ww <= 767 && st >= 200) {
      $("section.sp-on").addClass("on");
    } else {
      $("section.sp-on").removeClass("on");
      $("nav.global").removeClass("on");
    }
  });
  $("section.sp-on").on("click", function () {
    $("nav.global").addClass("on");
  });
  $("button.close-button").on("click", function () {
    if ($("nav.global").hasClass("on")) {
      $("nav.global").removeClass("on");
    }
  });
});

// jQuery(function ($) {
//   var marquee_w = $('.marquee').width();
//   marquee_w = marquee_w + 600;
//   $('.marquee div span:nth-of-type(2),.marquee div span:nth-of-type(3)').css('width', marquee_w);
//   $('.marquee div').css('padding-left', 800);
//   $(window).resize(function () {
//     //リサイズされたときの処理
//     var marquee_w = $('.marquee').width();
//     marquee_w = marquee_w + 600;
//     $('.marquee div span:nth-of-type(2),.marquee div span:nth-of-type(3)').css('width', marquee_w);
//     $('.marquee div').css('padding-left', 800);
//   });
// });


// $(function () {
//   var audio = $("#audio").get(0);
//   var isPlaying = false;
//   $("#btn").on("click", function () {
//     if (isPlaying) {
//       audio.pause();
//     } else {
//       audio.play();
//     }
//     $('.audio-img').toggleClass('audio-none');
//   });
//   audio.onplaying = function () {
//     isPlaying = true;
//   };
//   audio.onpause = function () {
//     isPlaying = false;
//   };
// });

$(function () {
  $("#btn").on("click", function () {
    alert('comming soon');
  });

});