<?php

namespace App\DesignPatterns\Structural\Bridge;

class HomePage extends AbstractWebPage
{
    public function getContent(): string
    {
        return sprintf(
            '<dive style="background-color:%s; color=%s">Welcome to site</dive>>',
            $this->getBackgroundColor(),
            $this->getTextColor()
        );
    }
}