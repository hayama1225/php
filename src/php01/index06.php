<?php
// echo "for文";
// echo "<br />";
// for ($i = 1; $i < 10; $i++) {
//     // "$i < 10"は回数なので、9回処理(whileの時は条件)
//     echo $i*2 . '<br />';
// }
// echo "<br />";
// $i = 0;
// while ($i < 3) {
//     // "$i < 10"は条件なので、値10未満まで処理(forは回数)
//     echo "i = " . $i . "<br />";
//     $i += 1;
// }
// echo "<br />";
// $i = 0;
// while ($i <= 4) {
//     echo $i . "<br />";
//     $i += 1;
// }
// echo "<br />";
// $count = 20;
// while ($count > -100) {
//     if($count === -11) {
//     break;//$countが-11の時、ループから抜ける
//     }
//     echo $count . "<br />";
//     $count -= 1; //$count--と同じ
// }
// echo "<br />";

// $i = 0;//初期値
// while ($i <= 100) {
//     if ($i === 20) {
//         break;
//     }
//     if ($i % 3 === 0) {
//         $i++;
//         continue;
//     }
//     // if ($i % 5 === 0) {
//     //     $i++;
//     //     continue;
//     // }
//     echo $i . "<br />";
//     $i += 1;
// }
// echo "<br />";

// $num = 0;

// do {
//     echo 'num = ' . $num . '<br />';
//     $num++;//$num += 1と同じ
// } while ($num < 3);
// echo "<br />";

// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 3 === 0) {
//         echo "fizz";
//     }elseif ($i % 5 === 0) {
//         echo "buzz";
//     }elseif ($i % 15 === 0) {
//         echo "fizzbuzz";
//     }else {
//         echo $i;
//     }
// }
// echo "<br />";
// for ($i = 1; $i <=5; $i++) {
//     echo $i*2 . "<br />";
// }
// echo "<br />";

// $i = 0;
// while ($i > 6) {
//     echo "\$i =" . $i . "<br />";
//     $i++;
// }
// echo "<br />";

// $i = 1;
// while ($i <= 20) {
//     echo $i . "<br />";
//     $i++;
// }
// echo "<br />";

// $i = 0;
// while ($i < 10) {
//     if ($i == 5) {
//         break;
//     }
//     echo $i;
//     $i++;
// }
// echo "<br />";

// $i = 0;
// while ($i < 10) {
//     if ($i == 5) {
//     $i++;
//     continue;//$iが5の時、$iに1を足す処理をし、スキップする
//     }
//     echo $i . "<br />";
//     $i += 1;
// }
echo "<br />";

for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "●";
    }
    echo "<br />";
}
echo "<br />";

for ($i = 1; $i < 6; $i++) {
        echo "?";
    echo "<br />";
}
echo "<br />";

echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";