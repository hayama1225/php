<?php
// $count = 0;

// while ($count < 20) {
//     $count += 1;
//     echo $count . "<br />";
// }

// $a = 5;
// $a += 3;
// echo $a . "です。" . "<br />";


// $count = 0;

// while ($count < 10) {
//     $count += 1;
//     echo $count . "<br />";
// }

// // <?php
// $i = 1;

// while ($i < 10) {
//     if ($i == 4) {
//     break;// $iが5の時、ループから抜ける。
//     }
//     echo $i;
//     $i++;
// }
// echo "<br />";

// // <?php
// $i = 0;

// while ($i < 10) {//10未満の値で
//     if ($i == 5) {//\$iが5の時、
//         $i++; //まず$aを$bに代入してから、$aを1増やす
//         continue;
//         // $iが5の時、$iに1を足す処理をし、スキップをする。(for,while,foreach,etc...のループの中で使用できる。)
//     }
//     echo $i;
//     $i++;
// }
// echo "<br />";

// $count = 0;
// while ($count <= 100) {
//     if ($count === 20) {
//         break;
//     }
//     if ($count % 3 === 0) {
//         $count++;
//         continue;
//     }
//     echo $count . "<br />";
//     $count++;
// }

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 == 0) { //for文は「初期値→条件判定→処理→増減」という流れで繰り返すループ処理です。回数が決まっているときに便利です。
        echo $FizzBuzz . "<br />";
    } else if ($i % 3 == 0) {
        echo $Fizz . "<br />";
    } else if ($i % 5 == 0) {
        echo $Buzz . "<br />";
    } else {
        echo $i . "<br />";
    }
}

for ($i = 1; $i <= 7; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "●";
    }
    echo "<br />";
}






