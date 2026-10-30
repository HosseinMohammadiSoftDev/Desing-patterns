<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod;

class Clinet
{
    public static function run()
    {
        $welcomeEmailSender = new WelcomeEmailSender('salpars2004@gmail.com');
        $welcomeEmailSender->sendEmail();

        $updateEmailSender = new UpdateEmailSender('salpars2004@yahoo.com');
        $updateEmailSender->sendEmail();
    }
}