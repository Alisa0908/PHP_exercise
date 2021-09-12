<?php 


require_once __DIR__ . '/User.php';

$bob = new User('Bob', 21);
$Tom = new User('Tom', 22);
$Ken = new User('Ken', 23);

echo $bob->selfIntroduction();
echo $tom->selfIntroduction();
echo $ken->selfIntroduction();

