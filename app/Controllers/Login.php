<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(){
        echo view('header');
        echo view('navbar');
        echo view('login');
    }

    public function cadastrar(){
        echo view('header');
        echo view('navbar');
        echo view('cadastrar');
    }

    public function cadastra_usuario(){
        
    }
}
