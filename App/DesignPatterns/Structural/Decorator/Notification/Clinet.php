<?php

namespace App\DesignPatterns\Structural\Decorator\Notification;

class Clinet
{
    public static function run()
    {
        $notification = new ConcrateNotification();
        echo $notification->send();

        $smsNotification = new SMSNotificationDecorator($notification);
        echo $smsNotification->send();
    }
}