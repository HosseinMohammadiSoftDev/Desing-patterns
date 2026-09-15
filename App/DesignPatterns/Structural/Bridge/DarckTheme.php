<?php

namespace App\DesignPatterns\Structural\Bridge;

class DarckTheme implements Theme
{

    public function getBackgroundColor(): string
    {
        return '#000000';
    }

    public function getTextColor(): string
    {
        return '#ffffff';
    }
}