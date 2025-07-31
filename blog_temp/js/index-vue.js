var indexs = new Vue({
  el: "div.index",
  data: {
    now_rec: "",
    now_recs: [],
    numbers: "",
    serviceslide: [{
        title: "輸送",
        text: "手から手へ。お客様の大切な商品やお荷物を心をこめてお届けします。 大手タイヤメーカーの運搬をメインに、一般雑貨及び自動車部品の運搬も手掛けております。 特に大手タイヤメーカーの運搬については、北は岩手、南は宮崎までの運搬実績があります。タイヤ以外の輸送についても、グリーンライングループや協力企業様のお力添えを頂き、無駄のない環境に配慮した物流を目指しております。"
      },
      {
        title: "荷役・請負",
        text: "工場や、物流倉庫にて製品の入庫、出庫、流通加工の業務を行っています。 大手タイヤメーカーの工場や物流倉庫にて製品の入庫、出庫、流通加工業務を行っております。流通加工については、製品へのラベル貼りから品質チェックまでお客様の手に届く状態まで行う場合もあり、お客様の求める品質要件にお答えできるように従業員一同取り組んでまいります。"
      },
      {
        title: "倉庫運営",
        text: "テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト"
      }
    ],
    view: [{
        left: "名称",
        right: "グリーンライントラスト株式会社"
      },
      {
        left: "本社",
        right: "愛知県豊田市上丘町八ツ田町119番地5"
      },
      {
        left: "設立",
        right: "平成13年9月25日"
      },
      {
        left: "資本金",
        right: "1,000万円"
      },
      {
        left: "代表取締役",
        right: "板倉正典"
      },
      {
        left: "事業種目",
        right: "1.一般貨物運送業<br>2.自動車運送取扱事業<br>3.特定労働者派遣業<br>4.荷役作業請負業"
      }
    ],
    pop: [{
        title: "Staff",
        sub: "社員",
        img: "staff",
        list: [{
            name: "hide-staff1"
          },
          {
            name: "hide-staff2"
          },
          {
            name: "hide-staff3"
          }
        ]
      },
      {
        title: "Facility",
        sub: "設備",
        img: "facility",
        list: [{
          name: "hide-facility"
        }]
      },
      {
        title: "History",
        sub: "沿革",
        img: "history",
        list: [{
          name: "hide-history"
        }]
      }
    ],
    reclist: [{
        title: "トラックドライバー",
        list: [{
          left: "仕事内容",
          right: "大型ﾄﾗｯｸの運転、取引先での荷役作業<br>GLTにおいては手積手下し（ちゃぶり）の仕事が大量に用意されております。体力にも自信のある方は是非！！"
        }, {
          left: "応募資格",
          right: "【必須】第1種大型自動車<br>※別のｶﾃｺﾞﾘｰ従事後に転籍OK（資格取得支援有）<br class='pc2'>【歓迎】ﾀｲﾔ運搬経験者大歓迎！！"
        }]
      },
      {
        title: "構内作業員",
        list: [{
          left: "仕事内容",
          right: "取引先の工場、倉庫、自社倉庫での荷役作業<br class='pc2'>個人のｽｷﾙ、能力によって任せれる仕事は変わっていきます"
        }, {
          left: "応募資格",
          right: "【必須】学歴、職歴不問"
        }]
      },
      {
        title: "監督者",
        list: [{
          left: "仕事内容",
          right: "管理・監督にて会社を動かしていく作業ﾄﾞﾗｲﾊﾞｰにおいては運行や売り上げの管理を、<br class='pc2'>構内作業者においては作業の進捗管理などを行ってもらいます"
        }, {
          left: "応募資格",
          right: "【歓迎】熱意のある方"
        }]
      },
      {
        title: "事務員",
        list: [{
          left: "仕事内容",
          right: "事務所にて受付や事務作業配属により変わりますが、<br class='pc2'>基本的にはﾃﾞｰﾀ入力やﾌｧｲﾘﾝｸﾞのお仕事がﾒｲﾝとなります"
        }, {
          left: "応募資格",
          right: "【必須】EXCEL,WORD基本入力"
        }]
      }
    ]
  },
  created: function () {
    this.now_recs = this.reclist[0];
  },
  methods: {
    changes: function () {
      jQuery(".white-box *").not(':animated').animate({
        "opacity": "0"
      }, 0);
      jQuery(".white-box *").delay(100).animate({
        "opacity": "1"
      }, 800);
      this.now_recs = this.reclist[this.numbers];
    }
  }
});

jQuery(function ($) {
  $(document).ready(function () {
    $(".service-slide").slick({
      arrows: true,
      dots: false,
      autoplay: false,
      lazyLoad: "progressive"
    });
  });

  function inview(delays) {
    $(".overright").delay(delays).fadeIn(500);
  }

  function outview() {
    $(".overright").fadeOut(500);
  }

  $(".popsbox").on("click", function () {
    var ww = $(window).outerWidth();
    if (ww >= 1366) {
      var ov = $(this).next("article").html();
      $(".viewcontent").html(ov);
      $(".viewcontent").find("ul.select-dots li:first-of-type").addClass("on");
      $(".viewcontent").find("div.slide-img p.img:nth-of-type(2)").addClass("on");
      inview(300);
    } else {
      $(this).next("article").slideToggle(500);
    }
  });

  $(".close").on("click", function () {
    outview();
  });

  $(document).on("click", "li.slidechange", function () {
    var target = $(this).attr("data");
    var imgname = "div.slide-img p." + target;
    $(".slide-img p.img").removeClass("on");
    $(imgname).addClass("on");
    $(".select-dots li").removeClass("on");
    $(this).addClass("on");
  });

  $(window).on("resize", function () {
    var ww = $(window).outerWidth();
    if (ww >= 1366) {
      $(".hide-wrap").hide();
    } else {
      $(".overright").hide();
    }
  });
});
