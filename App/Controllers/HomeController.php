<?php
namespace App\Controllers;



use App\DesignPatterns\Structural\Flyweight\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}