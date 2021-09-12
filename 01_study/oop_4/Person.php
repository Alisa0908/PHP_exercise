<?php 

require_once __DIR__ . '/User.php';

//継承
class Person extends User
{
    public function greet($to)
    {
        return 'こんにちは' . $to .'さん､いい天気ですね';
    }
}

