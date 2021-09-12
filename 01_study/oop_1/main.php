<?php 

// class クラス名 {

// }
// // クラスで設計されたものを実態化する､インスタンス化
// new クラス名{

// }
// class,関数のときの()位置に注意
// フルパス(絶対パス､細かいところまで住所を指定している状態)でのuser.php､､､
require_once __DIR__ . '/User.php';
// クラスがインスタンス化されたもの
$user = new User();

// var_dump($user);
// オブジェクトという型のものが出てくる､

// 定義したものが出てくる
// echo $user->name . '<br>';
// echo $user->age;
// //上書きできる
// $user->name = 'Tom';
// echo $user->name . '<br>';
// //=>とー>に注意だね

echo $user->greet('Tom');
// 関数も､メソッドも､呼び方はシングルアローなんだね

echo $user->selfIntroduction();

