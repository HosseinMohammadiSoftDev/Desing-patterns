<?php

namespace App\DesignPatterns\Structural\Decorator\Notification;

class NotificationDecorator implements Notification
{
    private Notification $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }


    public function send(): string
    {
        return $this->notification->send();
    }
}