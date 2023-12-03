<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function detail(): string 
    {   
        $data["monMessage"] = "Voici un message du controleur";
        return view('details', $data);
    }
}
