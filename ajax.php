<?php
ini_set('log_errors', 'on');  //ログを取るか
ini_set('error_log', 'php.log');  //ログの出力ファイルを指定
error_log('Ajax開始');
error_log('Ajaxから受けた値:' . print_r($_POST, true));

if (!empty($_POST)) {
  $key = $_POST['city'];
  $result = file_get_contents("http://weather.livedoor.com/forecast/webservice/json/v1?city=" . $key);
  error_log('APIから取得した値:' . print_r($result, true));
  echo $result;
}
