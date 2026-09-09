<?php
namespace App\Controllers;

use App\DesignPatterns\Creational\SimpleFactory\Clinet;

class HomeController{

    public function index(){
        $clinet = new Clinet();
        $clinet->run('book');
    }

}