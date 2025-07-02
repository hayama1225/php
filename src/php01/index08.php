<?php
$people = array("taro", "jiro", "saburo");
echo "<pre>";
var_dump($people);//var_dump($people[0]);で、taroの中身だけを出力できる。
echo "<pre />";

echo $people[0];

$people = array(
    // 作り方は、添字(連想配列のキー)の指定の部分以外、配列と同じです。
    //PHPで引数や配列内に登場する「=>」は、連想配列で「キー」と「値」を結びつける記号です。
    "person1" => "taro",//person1が「キー」　taroが「値」
    "person2" => "jiro",
    "people3" => "saburo"
);
echo "<pre>";
var_dump($people);
echo "<pre />";

// 配列の値("=>"の後ろ)を取得するには、配列の変数にキー("=>"の前)を［ ］（角括弧）で指定します。===短縮構文(ショート配列構文)。arrayを省略している？
$people = [
    "person1" => "taro",
    "person2" => "jiro",//最後に「,」が必要。
];

echo $people["person1"] . "<br />" . $people["person2"];


// 多次元配列は、配列の中に配列が入っている状態
$people = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
];

echo "<pre>";
var_dump($people);
echo "<pre />";

echo "<pre>";
var_dump($people);
echo "<pre />";
// 多次元配列を出力(echo)するときは、同じように配列の変数にキーを［ ］（角括弧）で指定
echo $people[0]["last_name"]; //echoでは、「キー」=>「値」にしない

$numbers = [
    [
        "100" => 100,
        "10" => 10,
        "1" => 1
    ],
    [
        "100" => 200,
        "10" => 20,
        "1" => 5,
    ]
];

echo "<pre>";
var_dump($numbers);
echo "<pre />";

echo $numbers[0]["10"];
echo $numbers[1]["100"];
echo "<br />";
echo "<br />";

// foreach 文では、配列の要素(値)の数だけ処理が繰り返し行われます。array()内は引数ではなく値と呼ぶ。
$people = array('Taro', 'Jiro', 'Saburo');
//「配列の要素(値)の数だけ処理」なので、asの後ろの変数名は単数形がわかりやすいみたい
foreach ($people as $person) {
    echo $person;
    //なぜ$personなのか？ 「foreach(配列 as 要素(値)を受け取る変数)」なので、asの後の$personをechoすると、値が出力される。
    echo '<br />';
}

echo "<pre>";
var_dump($people);
echo "<pre />";

$people = array(
    //以下でキーと値を定めておくと、foreachの$peopleのvar_dumpのキー[]は、[person1]になる。
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {//person
    print $person . "は" . $name . "です" . '<br />';
}

echo "<pre>";
var_dump($people);
echo "<pre />";

$people = array(
    "社員番号1" => "taro",
    "社員番号2" => "jiro",
    "社員番号3" => "saburo"
);
foreach ($people as $person => $name) {
    echo "[" . $person . "]" . " is " . $name . "." . "<br />";
}

$guys = [
    [
        "taro", 25, "men",
    ],
    [
        "jiro", 20, "men",
    ],
    [
        "hanako", 16, "women"
    ]
];

foreach ($guys as $person) {
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")" . "<br />";
}

echo "<pre>";
var_dump($guys);
echo "<pre />";