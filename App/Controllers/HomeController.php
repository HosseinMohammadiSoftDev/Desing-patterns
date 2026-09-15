<?php
namespace App\Controllers;



use App\DesignPatterns\Structural\Bridge\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}