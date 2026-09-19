<?php
namespace App\Controllers;



use App\DesignPatterns\Structural\Facade\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}