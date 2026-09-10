<?php
namespace App\Controllers;



use App\DesignPatterns\Structural\Adapter\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}