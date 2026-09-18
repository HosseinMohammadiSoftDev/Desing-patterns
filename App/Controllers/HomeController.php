<?php
namespace App\Controllers;



use App\DesignPatterns\Structural\Composit\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}