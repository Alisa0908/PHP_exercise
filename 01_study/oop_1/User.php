<?php 

class User
{
    private $name = 'Bob';
    public $age = 21;

    public function __construct()
    {

    }
//クラスの中では関数ではなくメソッド
    public function greet($to)
    {
        return 'こんにちは' . $to . 'さん<br>';
    }

    public function selfIntroduction()
    {
        return '私の名前は' . $this->name . 'です<br>'.
                '年齢は' . $this->age . 'です｡';

        // $nameは参照できない､メソッドの中は別世界だから.よって､$this->というのを追加して使えるようにする
        //privateも､クラス内だと参照できるということだからいけるのである｡外の中の違いはuserとthis!
    }
}

// ?private=クラスの中からしか見えない,publicは外から参照できるよ