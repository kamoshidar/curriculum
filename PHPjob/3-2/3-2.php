<?php
define("TAX", 1.1);

$products = [
    "鉛筆" => 100,
    "消しゴム" =>150, 
    "物差し" =>500
];

function calculation($sum){
    $input = TAX * $sum;
    return $input;
}

foreach($products as $key => $value){
    $value = calculation($value);
    echo $key."の税込み価格は".$value."円です。<br>\n";
}



?>
