<?php
// フォーム情報取得
$name = $_POST["name"];
$email = $_POST["email"];
$moviename= $_POST["moviename"];
// 時間取得
$date = date("Y/m/d H:i:s");

// デバッグ作業　vardump($date)
// ファイルを読み込む a は新規作成all

$file = fopen('./data/data.txt','a');

// ファイルに書き込む
fwrite(
    $file,
    "<div class='post'>". 
    $date.
    "\n".
    $name.
    "\n".
    $email.
    "\n".
    $moviename.
    "</div>");

// nは改行入れる

// ファイルを閉じる
fclose($file);

header("Location: read.php");
exit();

?>
