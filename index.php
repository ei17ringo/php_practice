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
?>