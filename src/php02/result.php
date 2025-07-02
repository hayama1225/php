<?php
// result.phpは、index.phpのラジオボタンで選択した都市の画像と時間が表示されるページ。
require_once("functions/search_city_time.php");
// 外部ファイルを1回だけ読み込む構文です。functionsフォルダ内のsearch_city_time. phpを読み込み、その中に定義されている関数や変数を、このファイルでも使えるようにする
$tokyo = searchCityTime("東京");
// search_city_time.phpファイルに関数を作成して東京の時間とそれ以外の国時間を表示できるようにします。 このセクションでは、東京の時間を表示する
$city = htmlspecialchars($_GET["city"], ENT_QUOTES);
$comparison = searchCityTime($city);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" target="_blank" href="/php02/index.php">
                World Clock
            </a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $tokyo["img"] ?>" alt="国旗">
                        <!-- 連想配列の取得の仕方は、配列名に対して[]を使用し、その[]の中にキーを指定する。上記の記述は、国旗の表示 -->
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $tokyo["name"] ?></p>
                        <p class="result-card__time"><?php echo $tokyo["time"] ?></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $comparison['img'] ?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $comparison['name'] ?></p>
                        <p class="result-card__time"><?php echo $comparison['time'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>