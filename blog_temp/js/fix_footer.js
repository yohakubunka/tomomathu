window.onscroll = function () {
    var check = window.pageYOffset ;       //現在のスクロール地点
    var docHeight = $(document).height();   //ドキュメントの高さ
    var dispHeight = $(window).height();    //表示領域の高さ

    if(check > docHeight-dispHeight-500){   //判別式　500はフッターからの距離です（ここはサイトのフッターに合わせて変更しましょう）
        $('.fix_f_wrap').fadeOut(1000);	//1000 はフェードアウトの速度です。調整可

    }else{
        $('.fix_f_wrap').fadeIn(1000);	//1000 はフェードインの速度です。調整可
    }
};
