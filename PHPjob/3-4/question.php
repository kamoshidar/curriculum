<?php
$name = $_POST['name'];
// ①画像を参考に問題文の選択肢の配列を作成してください。
$array = [
    [80, 22, 20, 21],
    ["PHP", "Python", "JAVA", "HTML"],
    ["join", "select", "insert", "update"]
];
// ② ①で作成した、配列から正解の選択肢の変数を作成してください
$array2 = [80, "PHP", "update"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>クイズ</title>
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
<form action="answer.php" method="post">
    <p>お疲れ様です<?php echo $name; ?>さん</p>
    <!--フォームの作成 通信はPOST通信で-->
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
    foreach ($array[0] as $value) {
        echo "<input type=\"radio\" name=\"port\" value=" . $value . ">" . $value;
    }
    ?>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
    foreach ($array[1] as $value) {
        echo "<input type=\"radio\" name=\"web\" value=" . $value . ">" . $value;
    }
    ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
    foreach ($array[2] as $value) {
        echo "<input type=\"radio\" name=\"sql\" value=" . $value . ">" . $value;
    }
    ?>
    <br>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="array2" value="<?php echo implode(",", $array2); ?>">
    <input type="submit" value="回答する"/>
</form>
</body>
</html>




