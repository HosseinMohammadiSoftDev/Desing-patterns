<?php

namespace App\DesignPatterns\Structural\Decorator\Notification;

class ConcrateNotification implements Notification
{

    public function send(): string
    {
        return "sendig notification";
    }
}