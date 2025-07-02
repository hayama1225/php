<?php
// searchCityTime関数をresult.phpファイルで呼び出します。呼び出された関数は search_city_time.phpファイルにて処理を行います。
// 引数city_nameには東京が格納されます
function searchCityTime($city_name)
{
    // search_city_time.phpファイルに cities.phpファイルを読み込む
    require("config/cities.php");
foreach ($cities as $city) {
        if ($city["name"] === $city_name) {
        $date_time = new DateTime("", new DateTimeZone($city["time_zone"]));//引数に何も入れていない時は、現在時刻が作成される。
        $time = $date_time->format("H:i");
        // フォーマット文字(教材のPHP⇒2章2-5)
        $city["time"] = $time;
            // 配列を追加した⇒[]をつけて値を代入===$city["time] = $time;
            return $city;
            // returnを使い、関数の結果を返している。戻り値はresult.phpファイルの変数 tokyoに格納される⇒まだしっかり理解していない...
        }
    }
}