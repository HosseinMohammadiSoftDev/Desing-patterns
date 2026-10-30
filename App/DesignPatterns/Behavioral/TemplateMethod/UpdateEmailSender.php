<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod;

class UpdateEmailSender
{
    protected function getSubject(): string
    {
        return 'Your account details have been updated';
    }

    protected function getBody(): string
    {
        return 'Your account details have been updated. Please log in to view your updated information.';
    }
}