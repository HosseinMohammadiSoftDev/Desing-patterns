<?php

namespace App\DesignPatterns\Structural\Bridge;

abstract class AbstractWebPage implements WebPage
{
    protected Theme $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    abstract public function getContent(): string;


    public function getBackgroundColor(): string
    {
        return $this->theme->getBackgroundColor();
    }
    public function getTextColor(): string
    {
        return $this->theme->getTextColor();
    }
}