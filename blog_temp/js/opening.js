$(function () {
    /* クラス名の有無の条件分岐 */
    setTimeout(function(){
        $.when(
            $(".load").fadeIn(2000)
        ).done(function(){
            setTimeout(function(){
                $.when(
                    $(".opening").fadeOut(2000)
                ).done(function(){
                    $(".mv").addClass("on"); 
                    if ($(".mv").hasClass("on")) {
                        console.log("test");
                        top_slide();
                        $(".s_fix.pc2").addClass("on"); 
                    }
                });
                /* ここまで */
            },1800)
        });
    },12000)
    $(".skip").click(function(){
        $(".load").fadeIn(2000,function(){
            $.when(
                $(".opening").fadeOut(2000)
            ).done(function(){
                $(".mv").addClass("on"); 
                if ($(".mv").hasClass("on")) {
                    top_slide();
                    console.log("test");
                    $(".s_fix.pc2").addClass("on"); 
                }
            });
        });
    });
    /* ここまで */
});

function top_slide(){
    var slickbase = $('.slick-main');
    var timeline = 5000;
    slickbase.slick({
        fade: true,
        autoplay: true,
        autoplaySpeed: timeline,
        speed: 0,
        pauseOnHover: false,
        pauseOnFocus: false,
        swipe: false,
        swipeToSlide: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        infinite: true,
    }).on('beforeChange', function(event, slick, currentSlide) {
        var slidebase = $(this).parents();
        slidebase.find('.slick-slide').removeClass('slick-continue');
        slidebase.find('.slick-active').addClass('slick-continue');
    });
    var firstslide = slickbase.find('.slick-slide:nth-child(1)');
    firstslide.removeClass('slick-active');
    window.setTimeout(function() {
        firstslide.addClass('slick-active');
    }, 1);

      // slick-dotの設定
    $('.slick-dots li button').on('click', function(e) {
        if (!$(this).parent().hasClass('slick-active')) {
            $('.slick-slide').removeClass('slick-active slick-continue');
        } else {
          // slick-activeになっている要素のページング押下を無効化
            e.preventDefault();
        }
    });
}