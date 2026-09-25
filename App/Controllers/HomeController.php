<?php
namespace App\Controllers;



use App\DesignPatterns\Behavioral\ChainOfResposibilty\Clinet;

class HomeController{

    public function index(){
        Clinet::run();
    }

}