<?php

namespace App\DesignPatterns\Behavioral\Mediator;

class Clinet
{
    public static function run()
    {
        $mediator = new GroupChatMediator();

        $groupChat1 = new GroupChat('groupChat1');
        $groupChat2 = new GroupChat('groupChat2');

        $user1 = new User('1');
        $user2 = new User('2');
        $user3 = new User('3');

        $user1->joinGroupChat($groupChat1, $mediator);
        $user2->joinGroupChat($groupChat1, $mediator);
        $user3->joinGroupChat($groupChat1, $mediator);
        $user1->joinGroupChat($groupChat2, $mediator);
        $user2->joinGroupChat($groupChat2, $mediator);

        $user1->sendMessageToGroupChat($groupChat1, $mediator, 'hello');
    }
}