<?php
namespace App\Controllers;


use App\DesignPatterns\Creational\Builder\Cline;

class HomeController{

    public function index(){
        Cline::run();
    }

}