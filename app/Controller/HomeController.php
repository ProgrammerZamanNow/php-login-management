<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Controller;

use ProgrammerZamanNow\Belajar\PHP\MVC\App\View;

class HomeController
{

    function index(){
        View::render('Home/index', [
            "title" => "PHP Login Management"
        ]);
    }

}