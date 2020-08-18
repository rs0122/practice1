<?php
function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);

function double($i){
        $result = $i * 2;
    return $result;
}
echo double(12);

function f($a, $b){
    $result = $a + $b;
    return $result;
}
echo f(2, 6);

$arr = array (1, 3, 5, 7, 9);
function multiply ($arr){
    $result = 1;
    foreach($arr as $num){
        $result *= $num;
    }
    return $result;
}
echo multiply($arr);

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if($max_number <= $a){
        $max_number = $a;
    }
 }
 return $max_number;
 }
 echo max_array($arr);
 
 $string = '<a href="https://news.google.com/topstories?hl=ja&gl=JP&ceid=JP:ja">Google news</a>';
 $result = strip_tags($string);
 echo $result;
 
 $data = array("A", "B", "C");
 array_push($data, "D", "E");
 print_r($data);
 
 $data = array("Fruits1" => "apple", "Fruits2" => "orange", "Fruits3" => "melon");
 $add_data = array("Fruits1" => "banana", "Fruits4" => "grape");
 $result = array_merge($data, $add_data);
 print_r($result);
 
 $now = time();
 print $now;
 
 $timestamp = mktime(0, 0, 0, 6, 25, 2020);
 print $timestamp;
 
 $timestamp = time() + (60 * 60 * 24) * 7;
 $next_week = date('Y年m月d日H時i分s秒', $timestamp);
 print $next_week;
 