<?php

// 練習1
echo 'Hello' .'world!';
echo '<br>';

// 練習2
echo 5 * 3 . '<br>';
echo 8 / 2 . '<br>';
echo 3 + 6 . '<br>';
echo 5 - 2 . '<br>';
echo 7 % 3 . '<br>';

// 練習3
// $のつぎに数字を変数名として使うとエラーになります
$var = '変数の値を出力します';
echo $var;
echo '<br>';

//　練習4
// お問い合わせフォームの、確認メールの内容の文章を作る時に使いやすい
// 代入した一番最後の文字しか表示されてない場合.(ドット)が抜けてる可能性がある
$var = 'この文字列と';
$var .= 'この文字列を';
$var .= '繋げます';
echo $var;
echo '<br>';

// データ型(JavaScriptもPHPもほぼ同じ)
// 文字列型(String)
// 例）'Hello'
// 整数型(Integer)
// 例）0 1 987 -1
// 浮動小数点数型(double)
// 例) 0.5 3.14 -2.7
// 論理型(boolean)
// true false のみ
// 配列型(array)
// 例) ['みかん','りんご',...]
// オブジェク型(object)
// 例) XMLRequest (頭にnewがついて使われてたやつ)

// 練習問題5　データ型（超重要）
// データ型によっては、一度代入した変数に別のデータ型が代入されると
// エラーになるものがある
// 整数を代入し、文字を代入するパターンはエラーが出ない
$var = 5;
echo $var . '<br>';
$var = '文字に上書き';
echo $var;
echo '<br>';

// 練習６
// 変数展開（軽く覚えておく程度でOK）
// 変数の中身を文字列の中で使える。
// これを使うときは"(ダブルクオーテーション)にする
$color = 'red';
echo "My ${color} car was stolen";
echo '<br>';

// 配列
$fruits = ['banana','mango','apple','watermelon'];
echo $fruits[0]; //バナナが表示される
echo '<br>';
// 追加
$fruits[]="nashi";

// 練習問題
// 好きな果物の名前を追加して、それを表示してみましょう
$fruits[] = 'orange';
echo $fruits[5];
echo '<br>';

// 小ネタ　配列の要素数を取得
// count(配列) 要素の数が取得できる
echo $fruits[count($fruits) - 1];
echo '<br>';

// 配列の内容を一部上書き
$fruits[0] = 'lemon';
echo $fruits[0];  //lemonが表示される

// 変数の中身を確認できる
var_dump($fruits);

// 連想配列
echo '<br>';
echo '------- 連想配列 ------';
echo '<br>';
// ['キー名1' => '値1','キー名2' => '値2','キー名3' => '値3',...]
// 1:男性 2:女性
$friends = ['friend_name' => 'seedくん','area' => 'セブ島','gender' => 1,'age' => 3];

echo $friends['friend_name'];  //seedくん　が表示される

// 値を追加
$friends['hobby'] = 'programming';

var_dump($friends);
echo '<br>';
// 練習問題
// $friends ($friends2) にペアの方の情報を入力し、hobbyを表示してみましょう
$friends = ['friend_name' => 'ブルーノくん','area' => 'ブラジル','gender' => 1,'age' => 22,'hobby' => 'ボドゲ'];
echo $friends['hobby'];
$friends['friend_name'] = 'ブルーノくん';
$friends['area'] = 'ブラジル';
$friends['age'] = 22;
$friends['hobby'] = 'ボドゲ';
echo '<br>';

// チャレンジャー問題
// 情報を使って文章を組み立てましょう　例）〇〇さんの趣味は△△です。
echo $friends['friend_name'] . 'の趣味は' . $friends['hobby'] . 'です';
echo '<br>';

// 二次元配列の場合
$teacher1 = ['name' => 'かん先生','area' => '香川', 'age' => 24];
$teacher2 = ['name' => 'いけあつ先生', 'area' => '千葉', 'age' => 29];

// 先生の情報が、２次元配列になる
$teachers = [$teacher1,$teacher2];
// 変数にしなくてもかける。が、みずらい。
// $teachers = [
//     ['name' => 'かん先生','area' => '香川', 'age' => 24],
//     ['name' => 'いけあつ先生', 'area' => '千葉', 'age' => 29]
// ];

echo $teachers[0]['name'];
echo '<br>';

// ルイスさんの質問。この形の配列のデータの取得方法は？
$friends =  ["name" => ["Moe","Yudai"], "area" => ["Akita","Osaka"], "age" => [25,26]];
echo $friends["name"][0];
echo '<br>';

// 制御文 if文
// 練習7
$var = 9;
if ($var > 10) {
    echo '10より大きい数値です';
}
echo '<br>';

// 練習8
// 条件A && 条件B  条件AもBも満たす　論理積
$var = 19;
if ($var >= 20 && $var < 30) {
    echo '20代です';
}
echo '<br>';
// 条件A　|| 条件B　条件Aか条件Bを満たす 論理和
$var = 89;

if ($var < 10 || $var >= 60){
    echo 'お子様やシニアの方は半額です';
}
echo '<br>';

// 練習１０（練習９を含む）
$var = 19;
if ($var >= 20 && $var < 30) {
    echo '20代です';
} elseif($var >= 30 && $var < 40) {
    echo '30代です';
} else {
    echo '20代または30代ではありません';
}
echo '<br>';

// 練習
$friends = ['friend_name' => 'seedくん','area' => 'セブ島','gender' => 1,'age' => 13];
// 10代、20代、30代の判定ができる、if 文を作って、$friendsの年代を判定して「○○さんは、○代です」というふうに
// 表示しましょう

// うまくいったら、ペアの人の情報に$friendsを上書きして、同じように表示しましょう
// （上書き処理はif文の上に書いて、一回書いたif文を再利用しましょう）
// ヒント：変数代入を活用しましょう

// $var = $friends['age'];
// if ($var >= 10 && $var < 20) {
//     echo $friends['friend_name'].'は、10代です';
// } elseif($var >= 20 && $var < 30) {
//     echo $friends['friend_name'].'は、20代です';
// } elseif($var >= 30 && $var < 40) {
//     echo $friends['friend_name'].'は、30代です';
// } else {
//     echo $friends['friend_name'].'は、年代不明です';
// }
$var = $friends['age'];
$generation = '';
if ($var >= 10 && $var < 20) {
   $generation = '10代';
    // echo $friends['friend_name'].'は、10代です';
} elseif($var >= 20 && $var < 30) {
    $generation = '20代';
    // echo $friends['friend_name'].'は、20代です';
} elseif($var >= 30 && $var < 40) {
    $generation = '30代';
    // echo $friends['friend_name'].'は、30代です';
} else {
    $generation = '年代不明';
    // echo $friends['friend_name'].'は、年代不明です';
}
echo $friends['friend_name'] . 'は、' . $generation . 'です';
?>