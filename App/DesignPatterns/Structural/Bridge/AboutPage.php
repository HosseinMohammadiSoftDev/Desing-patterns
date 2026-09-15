<?php

namespace App\DesignPatterns\Structural\Bridge;

class AboutPage extends AbstractWebPage
{
    public function getContent(): string
    {
        return sprintf(
            '<dive style="background-color:%s; color=%s">About writer page</dive>>',
            $this->getBackgroundColor(),
            $this->getTextColor()
        );
    }
}