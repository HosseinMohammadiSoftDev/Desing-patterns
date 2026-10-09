<?php

namespace App\DesignPatterns\Behavioral\Mediator;

class GroupChatMediator implements GroupChatMediatorInterface
{

    public function addUserToGroupChat(User $user, GroupChat $groupChat)
    {
        $groupChat->addUser($user);
    }

    public function sendMessageToGroupChat(User $user, GroupChat $groupChat, string $message)
    {
        $groupChat->sendMessage($user, $message);
    }
}