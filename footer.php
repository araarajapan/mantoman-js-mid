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

    // $option = $('<option>')
    //     .val(value)
    //     .text(name)
    //     .prop('selected', isSelected);

    $("#js-manth-button").on("click", function() {

      for (var key in dayReturn) {

        $('#js-manth-select').append($('<option>').val(key).text(key + '月の日数を調べる'));
      }

    });




    $("#js-manth-select").on("change", function() {
      // var manth_select = $("#js-manth-select").val();
      // alert(dayReturn[manth_select]);

      var test = 2;
      alert(dayReturn[test] + '日までです!');

    });


    //============================
    /* task3 画像切り替え */
    //============================

    //============================
    /* task4 txtファイル変換 */
    //============================

    //============================
    /* task5 ウェザーニュース */
    //============================
  });
</script>
</body>