<?php

namespace App\DesignPatterns\Structural\Decorator\Notification;

class EmailNotificationDecorator extends NotificationDecorator
{
    public function send(): string
    {
        return "sendig Email" + parent::send();
        
    }
}