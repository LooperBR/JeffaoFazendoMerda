<?php

namespace App\Controllers;

class Curso extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('navbar');
        echo view('cursos');
    }

    public function publicar()
    {
        echo view('header');
        echo view('navbar');
        echo view('publicar_curso');
    }
}
