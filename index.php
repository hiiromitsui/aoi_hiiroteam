<?php
// データ型

// 文字列　string
echo'Hello World';
 
echo '<br>';



echo 'Hello' . 'World' . '<br>';
echo '三井比以呂'. '<br>';


// 整数　integer
echo 10+5 + 10+5 . '<br>';
echo 10- 4;
echo 10 * 4;
echo 10 / 2;
echo 10 % 3 . '<br>';

echo '10+5';


echo'<br>';


// 変数
$item='コーヒー';

echo $item;

$item='新コーヒー';
echo $item;

$item .='牛乳';
echo $item;

echo 'Hiiro'. 'Mitsui' ;

echo '好きな飲み物は' . $item;

$food='とんこつラーメン';
$name='野口さん';

echo $name . 'の好きな食べ物は'. $food;

// echo 'こんにちは’. $name;

echo "こんにちは、 ${name}";




?>