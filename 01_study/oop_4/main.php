<?php 


require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Person.php';

$bob = new User('Bob', 21);
$tom = new User('Tom', 22);
$ken = new Person('Ken', 23);

echo $bob->selfIntroduction();
echo $bob->greet('小原');
echo $tom->selfIntroduction();
echo $tom->greet('小原');
echo $ken->selfIntroduction();
echo $ken->greet('小原');

