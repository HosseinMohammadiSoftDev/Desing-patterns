<?php
namespace App\Controllers;



use App\DesignPatterns\Behavioral\Mediator\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}