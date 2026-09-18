<?php

namespace App\DesignPatterns\Structural\DataMapper;

class Clinet
{
    public static function run (): void
    {
        $pdo = new \PDO("mysql:host=localhost;dbname=clinet", "root", "");

        $userMapper = new UserMapper($pdo);
        $user = $userMapper->getById(1);

        echo $user->getId();
        echo $user->getName();
        echo $user->getEmail();

        $saveUser = new User(2, 'mohammad', 'mohammad@gmail.com');
        $userMapper->save($saveUser);

        echo $saveUser->getId();
    }
}