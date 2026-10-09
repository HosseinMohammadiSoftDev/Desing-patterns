<?php

namespace App\DesignPatterns\Behavioral\Mediator;

class GroupChat
{
    private array $users = [];

    public function __construct(private readonly string $name){}

    public function addUser(User $user): void
    {
        $this->users[] = $user;
    }

    public function sendMessage(User $user, string $message): void
    {
        foreach ($this->users as $u) {

             if ($u !== $user) $u->reciveMessage($message);


        }
    }
}