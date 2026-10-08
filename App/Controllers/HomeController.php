<?php
namespace App\Controllers;



use App\DesignPatterns\Behavioral\Command\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}