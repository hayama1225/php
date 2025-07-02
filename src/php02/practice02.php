<?php
$age = 0;

if ($age >= 20) {
    echo ("adult");
}elseif ($age === 0) {
    echo ("baby");
}else {
    echo ("child");
}
echo "<br />";

$age = 24;

if ($age >= 10 && $age < 20) {
    echo "10代";
}elseif ($age >= 21 && $age < 30) {
    echo "20代";
}elseif ($age >= 31 && $age < 40) {
    echo "30代";
}else {
    echo "それ以外";
}
echo "<br />";

for($i = 0; $i <= 20; $i++) {
    if($i === 3){//$iが3になったらループ終了
    break;
    }
    echo $i;
}
echo "<br />";

for ($i = 0; $i <= 5; $i++) {
    if ($i === 3) { //$iが3になったらスキップ
        continue;
    }
    echo $i;
}
echo "<br />";

for($i = 0; $i <= 2; $i++) {
    for($j = 0; $j <= 2; $j++) {
        echo $i . "-" . $j . "<br />";
    }
}
echo "<br />";

echo "上記はfor文のネスト" . "<br />";
echo "i=0⇒j=0でループ i=0⇒j=1でループ i=0⇒j=2でループ" . "<br />";
echo "i=1⇒j=0でループ i=0⇒j=1でループ i=0⇒j=2でループ" . "<br />";
echo "i=2⇒j=0でループ i=0⇒j=1でループ i=0⇒j=2でループなので、" . "<br />";
echo "echo \$1 . \$j . brは、" . "<br />";
echo "i=0⇒j=0 br i=0⇒j=1 br i=0⇒j=2 br...となる様子..." . "<br />";

$arr = [2,4,6,8,10];

for($i = 0; $i <= 4; $i++) {
    echo "\$i" . "-" . $arr[$i] . "<br />";
}
echo "上記の\$arr = [2,4,6,8,10]の場合、\$i=インデックス(添え字)、2-10は値" . "<br />";
echo "つまり、\$arr[\$i]とは..." . "<br />";
echo "\$i = 0のとき：\$arr[0] → 2" . "<br />";
echo "\$i = 1 のとき：\$arr[1] → 4" . "<br />";

$arr = [2, 4, 6, 8, 10];
$sum = 0;//$sumを追加

for ($i = 0; $i <= 4; $i++) {
    $sum += $arr[$i];
    echo $sum . "<br />";
}
echo "処理では0+2[0]+4[1]+6[2]+8[3]+10[4]となっている。"."<br />";
echo "複雑に見えるが、2+4+6+8+10を行っているいるだけ" . "<br />";

for ($i = 1; $i <= 10; $i++) {
    if ($i === 3) {
    continue;
    }elseif ($i === 7) {
    break;
    }else {
    echo $i . "<br/>";
    }
}

// function say_hello() {
//     echo "hello world" . "<br/>";
// }
// say_hello();

// $say_hello = function() {
//     echo "hello." . "<br />";
// };

// $say_hello();

// function cal($x, $y) {
//     return $x / $y;
// };
// $result = cal(9,3);
// echo $result;

// function cal($a, $b, $c) {
//     echo (($a + $b + $c)/3);
// }
// echo "平均値は" . cal(9, 4, 2);
//上記も正解ではあるが、returnがないので「文字列との結合」など関数内の処理結果を後に返せない。

function cal($a, $b, $c) {
    return ($a + $b + $c) / 3;
}
$result = cal(9, 4, 2);
echo "平均値は" . $result;

