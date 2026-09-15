<?php

namespace App\DesignPatterns\Structural\Bridge;

class Clinet
{
    public static function run(): void
    {
        $theme = new LightTheme();

        $homePage = new AboutPage($theme);

        echo $homePage->getContent();
    }
}