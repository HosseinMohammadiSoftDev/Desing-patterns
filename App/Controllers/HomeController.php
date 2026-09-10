<?php
namespace App\Controllers;



use App\DesignPatterns\Creational\Singleton\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}