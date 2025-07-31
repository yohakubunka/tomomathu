$(function() {
$(".tabmenu li").click(function() {
var num = $(".tabmenu li").index(this);
$(".tabContent").removeClass('active');
$(".tabContent").eq(num).addClass('active');
$(".tabmenu li").removeClass('active');
$(this).addClass('active')
});
});

$(function() {
$(".tabmenu2 li").click(function() {
var num = $(".tabmenu2 li").index(this);
$(".tabContent2").removeClass('active');
$(".tabContent2").eq(num).addClass('active');
$(".tabmenu2 li").removeClass('active');
$(this).addClass('active')
});
});
