<?php
date_default_timezone_set('Asia/Tokyo');
$name = $_POST['name'];
$number = $_POST['number'];
$sum = rand(1,9) * $number;
$datanow = date('Y-m-d H:i:s');
//1 ~ 10：凶、　11 ~ 15：小吉、　16 ~ 20：中吉、　21 ~ 25：吉、　26 ~ 36：大吉、　37以上：残念

if($sum >= 37){
    $input = "残念";
}else if($sum >= 26){
    $input = "大吉";
}else if($sum >= 21){
    $input = "吉";
}else if($sum >= 16){
    $input = "中吉";
}else if($sum >= 11){
    $input = "小吉";
}else{
    $input = "凶";
}

?>

<p><?php echo $datanow; ?></p>
<p>名前は、<?php echo $name; ?>です。</p>
<p>番号は、<?php echo $sum; ?>です。</p>
<p>結果は、<?php echo $input; ?>です。</p>
