<?php

namespace App\DesignPatterns\Creational\Builder;

class Burger
{
    private string $bub;
    private string $patty;
    private string $cheese;
    private array  $topping = [];

    public function setBub(string $bub): void
    {
        $this->bub = $bub;
    }

    public function setPatty(string $patty): void
    {
        $this->patty = $patty;
    }

    public function setCheese(string $cheese): void
    {
        $this->cheese = $cheese;
    }

    public function setTopping(array $topping): static
    {
        $this->topping[] = $topping;

        return $this;
    }


    public function getBurgerInfo(): string
    {
        $toppingStr = implode(',', $this->topping);

        return "Burger: {$this->bub} | {$this->patty} | {$this->cheese} + $toppingStr";
    }
}