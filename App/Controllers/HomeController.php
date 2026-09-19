<?php
namespace App\Controllers;



use App\DesignPatterns\Structural\Decorator\Notification\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}