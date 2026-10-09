<?php

namespace App\DesignPatterns\Behavioral\Mediator;

interface GroupChatMediatorInterface
{
    public function addUserToGroupChat(User $user, GroupChat $groupChat);
    public function sendMessageToGroupChat(User $user, GroupChat $groupChat, string $message);
}