<?php

namespace App\DesignPatterns\Structural\Decorator\Notification;

class SMSNotificationDecorator extends NotificationDecorator
{
    public function send(): string
    {
        return "sendig sms" + parent::send();
        
    }
}