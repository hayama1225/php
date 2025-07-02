<?php
echo "加算子と減算子";
echo "<br />";
echo "数値に1を加える操作を加算子、1を減じる操作を減算子と言います。";
echo "<br />";
echo "加算子と減算子には、2種類書き方が存在します。";
echo "<br />";
echo "前置と後置では演算を行うタイミングが違います。";
echo "<br />";
echo "前置は変数の参照より先、後置では変数の参照後です。";
echo "<br />";

echo "++＄a⇒＄aに1を加えて、＄aを返す。";
echo "<br />";
echo "＄a++⇒＄aを返し、1を加える。";
echo "<br />";

$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo "++＄aは、";
echo (++$a);
echo "<br />";
echo "＄a++は、";
echo ($b++);
echo "<br />";
echo (--$c);
echo "<br />";
echo ($d--);
echo "<br />";

$a = $b = 10;
$c = $d = 5;

echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d++;
echo "<br />";


