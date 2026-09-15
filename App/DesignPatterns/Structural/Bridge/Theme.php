<?php

namespace App\DesignPatterns\Structural\Bridge;

interface Theme
{
    public function getBackgroundColor(): string;
    public function getTextColor(): string;
}