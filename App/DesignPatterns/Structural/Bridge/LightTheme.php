<?php

namespace App\DesignPatterns\Structural\Bridge;

class LightTheme implements Theme
{

    public function getBackgroundColor(): string
    {
        return '#ffffff';
    }

    public function getTextColor(): string
    {
        return '#000000';
    }
}