<?php
$a = 5;
if ($a === 5) {
    echo "\$a is 5.";
}else {
    echo "\$a is not 5.";
}
echo "<br />";

$a = 51;
if ($a === 7) {
    echo "\$a is 7.";
}elseif ($a === 5) {
    echo "is 5.";
}else{
    echo "not 7 nor 5...";
}
echo "<br />";

$people = "jiro";
switch ($people) {
    case "taro":
    echo "its taro.";
    break;
    case "jiro":
    echo "its jiro.";
    break;
    case "saburo":
    echo "its saburo";
    break;
    default:
    echo "others...";
}
echo "<br />";

echo "三項演算子(?と:の組み合わせでif文と似たような条件演算子)";
echo "<br />";
$a =5;
$result = ($a === 7) ? "YES" : "NO";
echo $result;
echo "<br />";


echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";


