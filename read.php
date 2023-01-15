<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/sample.css">
    <link rel="stylesheet" href="css/reset.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
</head>
<body>
    アンケート結果
    
</body>
</html>

<?php

// ファイルを変数に格納
$filename = './data/data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');

// whileで行末までループ処理
while(!feof($fp)){
    $text = fgets($fp);
    echo $text. '<br>';}

// fcloseでファイルを閉じる
fclose($fp);

?>

