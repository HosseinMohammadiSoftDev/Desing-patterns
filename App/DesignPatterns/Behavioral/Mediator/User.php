<?php

namespace App\DesignPatterns\Behavioral\Mediator;

class User
{
    private array $groupChats = [];

    public function __construct(private readonly string $name) {}

    public function joinGroupChat(GroupChat $groupChat, GroupChatMediatorInterface $mediator)
    {
        $mediator->addUserToGroupChat($this, $groupChat);
    }

    public function sendMessageToGroupChat(GroupChat $groupChat, GroupChatMediatorInterface $mediator, string $message)
    {
        $mediator->sendMessageToGroupChat($this, $groupChat, $message);
    }

    public function reciveMessage(string $message): void
    {
        echo $this->name . "recive message" . $message . PHP_EOL;
    }
}