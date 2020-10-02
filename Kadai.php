<?php
echo 'hello php';

//1. $nameにあなたの名前を代入し、if文で$nameがあなたの名前なら「私はあなたの名前です。」、違っていたら「私はあなたの名前ではありません」表示させる。
$name =Mashi;
if ($name==Mashi) {
    echo "私はMashiです。";
} else if ($name>=Mashi); {
    echo "私はMashiではありません。";
}

// 2. for文を使って、1から10000までの合計値を表示させる。
$total =0;
echo $total;
for ($i =0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;

   

// 3. $fruitsに配列で好きなフルーツを５個代入し、foreach文で順番に提出。
$fruits = array("pineapple","cherry","Grapefruit","kiwi","banana");
foreach($fruits as $fruit) {
    echo "好きなフルーツは". $fruit;
    echo "\n";
}

// 4.【応用】　次のプログラムのバグを修正し、1から１００までの間で５の倍数のみ表示させる。
$start =1;
$end = 100;

for($i=1; $i<=100; $i++) {
    if ($i % 5 ==0){
    echo $i;
}}
