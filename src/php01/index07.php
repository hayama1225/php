<?php
function addnumber($a, $b)
// ↑関数名はaddnumberで、引数は$aと$b
{
    // {}内は処理内容で、
    $add = $a + $b;
    // 変数$addに$a+$bを代入の意味
    return $add;
    // 戻り値とは、結果の値のこと
}

$total = addnumber(2, 3); //$totalを定義しなくても、echo (addnumber(2, 3)) . "<br />"の1行でも結果だけ考えれば同じ。;
print $total . "<br />";


//Q2
function scores($score1, $score2, $score3)
{
    $totalscore = $score1 + $score2 + $score3;
    if ($totalscore > 210) {
        echo $totalscore . " is PASS.";
    }else {
        echo $totalscore . " is RETRY...";
    }
}
$aaa = scores(60, 60, 91);
// echo scores(90, 80, 60) . "<br />";
echo $aaa . "<br />";


//Q3
function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTriangleArea($base, $height)
{
    return $base * $height;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "<br />";
echo getTriangleArea(7, 8) . "<br />"; // "\n"が反映されない...
echo getTrapezoidArea(4, 5, 4);

