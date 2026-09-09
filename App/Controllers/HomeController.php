<?php
namespace App\Controllers;

use App\DesignPatterns\Creational\StaticFactory\Clinet;

class HomeController{

    public function index(){
        $clinet = new Clinet();
        $clinet->run('csv');
    }

}