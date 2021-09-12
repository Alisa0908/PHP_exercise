<?php 

class User
{
    public $name = 'Bob';
    public $age = 21;
    //初期化
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->$age = $age;

    }
//クラスの中では関数ではなくメソッド

    public function selfIntroduction()
    {
        return '私の名前は' . $this->name . 'です<br>'.
                '年齢は' . $this->age . 'です｡';

        // $nameは参照できない､メソッドの中は別世界だから.よって､$this->というのを追加して使えるようにする
        //privateも､クラス内だと参照できるということだからいけるのである｡外の中の違いはuserとthis!
    }
}

// ?private=クラスの中からしか見えない,publicは外から参照できるよ