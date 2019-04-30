<div class="footer">
  <div class="footer-inner">
    <div class="copyright">
      <p>Copyright &copy; araarajapan</p>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
<script>
  $(function() {

    //============================
    /* task1 たし算機能 */
    //============================

    $("#js-column1").on("blur", function() {
      checkForm();
    });

    $("#js-column2").on("blur", function() {
      checkForm();
    });

    $("#js-cal-button").on("click", function() {
      var column1 = Number($("#js-column1").val());
      var column2 = Number($("#js-column2").val());
      alert(column1 + column2);
    });

    //入力フォームが数字で埋まったら合計ボタンを開放する
    function checkForm() {
      var column1 = $("#js-column1").val();
      column1 = column1.match(/^[0-9]+$/);
      var column2 = $("#js-column2").val();
      column2 = column2.match(/^[0-9]+$/);

      if (column1 && column2) {
        //両方数字判定されたらsubmitを活性にするdisabledを外す
        $("#js-cal-button").prop("disabled", false);
        $(".cal-warning").text("合計ボタンを押したら計算されます");
      } else {
        //空白ないしは文字列であれば非活性に戻す
        $("#js-cal-button").prop("disabled", true);
        $(".cal-warning").text("数字を入力してください");
      }
    }

    //============================
    /* task2 月別日数検索 */
    //============================
    var dayReturn = {
      1: 31,
      2: 30,
      3: 31,
      4: 30,
      5: 31,
      6: 30,
      7: 31,
      8: 31,
      9: 30,
      10: 31,
      11: 30,
      12: 31,
    };

    $("#js-manth-button").on("click", function() {

      for (var key in dayReturn) {
        $('#js-manth-select').append($('<option>').val(key).text(key + '月の日数を調べる'));
      }

      $(this).addClass('hide');
      $("#js-manth-select").removeClass('hide');
    });


    $("#js-manth-select").on("change", function() {

      var key = $(this).val();
      alert(dayReturn[key] + '日までです!');

    });


    //============================
    /* task3 画像切り替え */
    //============================

    //リロードしたら実行
    var imageList = randomArray();

    $('#mainImage img').attr('src', imageList[0]);
    $('#imageList .js-img1 img').attr('src', imageList[0]);
    $('#imageList .js-img2 img').attr('src', imageList[1]);
    $('#imageList .js-img3 img').attr('src', imageList[2]);
    $('#imageList .js-img4 img').attr('src', imageList[3]);
    $('#imageList .js-img5 img').attr('src', imageList[4]);

    function randomArray() {

      //この中からランダムでn枚取り出す
      var imageList = [ //画像を格納
        'img/pic1.jpg',
        'img/pic2.jpg',
        'img/pic3.jpg',
        'img/pic4.jpg',
        'img/pic5.jpg',
        'img/pic6.jpg',
        'img/pic7.jpg',
        'img/pic8.jpg',
        'img/pic9.jpg',
        'img/pic10.jpg',
        'img/pic11.jpg',
        'img/pic12.jpg',
        'img/pic13.jpg',
        'img/pic14.jpg',
        'img/pic15.jpg'
      ]

      var listNum = imageList.length; //画像が入った配列の要素数

      while (listNum) { //TRUEである限り続く = カウントがデクリメントされて0になったら終了
        var i = Math.floor(Math.random() * listNum); //要素数の乱数をiに獲得
        var str = imageList[--listNum]; //要素数-1 一番最後の要素をstrに入れる
        imageList[listNum] = imageList[i]; //乱数で取り出された要素を配列の最後に入れ直す
        imageList[i] = str; //strを乱数で指定された位置に入れる
      }

      return imageList;
    }

    //写真hover時にメイン箇所に表示させる
    $("#imageList img").hover(function() {
      $('#mainImage img').attr('src', $(this).attr('src'))
    })

    //============================
    /* task4 txtファイル変換 */
    //============================

    //============================
    /* task5 ウェザーニュース */
    //============================
    $("#js-city-select").on("change", function() {

      var city = $(this).val();
      console.log(city);

      $.ajax({
        type: "get",
        url: "http://weather.livedoor.com/forecast/webservice/json/v1",
        dataType: "jsonp",
        data: {
          city: '130010'
        }
      }).done(function(rst) {
        console.log(rst);
      });


    })


  });
</script>
</body>