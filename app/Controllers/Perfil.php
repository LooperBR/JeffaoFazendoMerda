<?php

namespace App\Controllers;

class Perfil extends BaseController
{
    public function index()
    {
        session_start();

        if((!isset($_SESSION['email_usuario']) == true) and (!isset($_SESSION['senha']) == true))
        {
            unset($_SESSION['email_usuario']);
            unset($_SESSION['senha']);
            header("Location: ".base_url('login'));
            die;
        }
        $data['logado'] = $_SESSION['email_usuario'];

        echo view('header');
        echo view('navbar');
        echo view('perfil',$data);
    }
}
