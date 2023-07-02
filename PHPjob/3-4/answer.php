<?php
$name = $_POST['name'];

$port = $_POST['port'];
$web = $_POST['web'];
$sql = $_POST['sql'];
$array2 = explode(",", $_POST['array2']);

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function checkAnswer($selected, $index)
{
    global $array2;
    if ($selected == $array2[$index]) {
        return "正解！";
    } else {
        return "残念・・・";
    }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>結果</title>
    <link rel="stylesheet" href="index.css">
    <style>
        body{
        background-color: gray;
        align-items: center;
        justify-content: center;
        color: white;
        }
    </style>
</head>
<body class="answer">
    <p><?php echo $name; ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php echo checkAnswer($port, 0) ?></p>

    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php echo checkAnswer($web, 1) ?></p>

    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php echo checkAnswer($sql, 2) ?></p>
</body>
</html>
