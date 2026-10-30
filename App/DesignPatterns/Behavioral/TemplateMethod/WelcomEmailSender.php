<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod;

class WelcomEmailSender
{
    protected function getSubject(): string
    {
        return 'Welcome to our site!';
    }

    protected function getBody(): string
    {
        return 'Thank you for joining our site!';
    }
}