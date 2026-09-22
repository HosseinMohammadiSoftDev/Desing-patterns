<?php
namespace App\Controllers;



use App\DesignPatterns\Structural\Proxy\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}