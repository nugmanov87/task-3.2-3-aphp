<?php
declare(strict_types=1);

use User\User;

function my_autoload($className)
{
    require_once __DIR__ . '/Classes/' . str_replace('\\', '/', $className) . '.php';
}

spl_autoload_register("my_autoload");

$user1 = new User();
$user1->authenticate('Victor', 'corona');
$user1->auth('Nicolay', 'moscow');

$person1 = new Person();
$person1->name = 'Sergey';
$person1->login = 'serg';
$person1->password = 'pass';

echo $person1;
echo '<br>';
$person1serialize = serialize($person1);
echo "serialize: $person1serialize";
echo '<br>';
$person1unserialize = unserialize($person1serialize);
echo "unserialize: $person1unserialize";
echo '<br>';
$person1->iterator();
$person1 = str_replace('login', 'newLogin', $person1);
echo '<br>';
echo $person1;


$person2 = new Person();
$person2->name = 'Petr';
$person2->login = 'petrovich';
$person2->password = 'russia';

echo '<br>';
$PeopleList = new PeopleList();
$PeopleList->list = $person1;
$PeopleList->list = $person2;
$list = $PeopleList->getList();
foreach ($list as $name => $item) {
    echo "$name=>$item<br>";
}
