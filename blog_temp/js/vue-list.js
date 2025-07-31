var globals = new Vue({
  el: "nav.global",
  data: {
    global: [{
        link: "#pagetop",
        text: "test"
      },
      {
        link: "test",
        text: "test"
      },
      {
        link: "test",
        text: "test"
      },
      {
        link: "test",
        text: "test"
      },
      {
        link: "test",
        text: "test"
      },
      {
        link: "test",
        text: "test"
      },
      {
        link: "test",
        text: "test"
      },
      {
        link: "test",
        text: "test"
      }
    ]
  }
});

var unders = new Vue({
  el: "nav.under",
  data: {
    undernav: [{
        link: "#pagetop",
        text: "TOP"
      },
      {
        link: "#about",
        text: "遠隔眼底読影の5つのメリット"
      },
      {
        link: "#reason",
        text: "選ばれる理由"
      },
      {
        link: "#intro",
        text: "導入事例"
      },
      {
        link: "#comp",
        text: "会社案内"
      },
      {
        link: "news",
        text: "新着情報"
      },
      {
        link: "blog",
        text: "ブログ"
      },
      {
        link: "contact",
        text: "お問い合わせ"
      }
    ]
  },
  methods: {
    nolinks: function () {
      alert("Comming Soon");
      event.preventDefault();
    }
  },
  mounted: function () {
    $("a").on("click", function () {
      var linkname = $(this).attr("href");
      if (linkname == "http://yohakubunka3.xsrv.jp/test/tene/blog") {
        alert("Comming Soon!");
        return false;
      }
    });
  }
});
