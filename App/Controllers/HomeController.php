<?php
namespace App\Controllers;



use App\DesignPatterns\Creational\Prototype\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}