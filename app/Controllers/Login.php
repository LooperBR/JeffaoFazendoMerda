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

    public function login(){
        $db = \Config\Database::connect();
        session_start();
        if(isset($_POST['submit']) && !empty($_POST['email_usuario']) && !empty($_POST['senha']))
        {
            // Acessa
            $email = $_POST['email_usuario'];
            $senha = $_POST['senha'];

            $sql = "SELECT * FROM usuario WHERE email_usuario = '$email' and senha = '$senha'";        

            $result = $db->query($sql);
            // var_dump($result->resultID->num_rows);
            // die;
            if($result->resultID->num_rows < 1)
            {
                unset($_SESSION['email_usuario']);
                unset($_SESSION['senha']);
                header("Location: ".base_url('login'));
                die;
            }
            else
            {
                // var_dump('passou');
                // die;
                $_SESSION['email_usuario'] = $email;
                $_SESSION['senha'] = $senha;
                header("Location: ".base_url('perfil'));
                die;
            }
        }
        else
        {
            // Não acessa
            header("Location: ".base_url('login'));
            die;
        }
    }

    public function cadastra_usuario(){

        $db = \Config\Database::connect();

        if(isset($_POST['submit']))
        {
  
            $nome = $_POST['nome_usuario'];
            $sobrenome = $_POST['sobrenome_usuario'];
            $data_nasc = $_POST['data_nascimento'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $celular = $_POST['celular'];
            $email = $_POST['email_usuario'];
            $senha = $_POST['senha'];
            $data_cadastro = date('Y/m/d');
    
            $query = "INSERT INTO usuario(nome_usuario, sobrenome_usuario, data_nascimento, cidade, estado, celular, email_usuario, senha, data_cadastro) VALUES ('$nome', '$sobrenome', '$data_nasc', '$cidade', '$estado', '$celular', '$email', '$senha', '$data_cadastro')";
            $db->query($query);
            header("Location: ".base_url('login'));
            die;
        }
    }

    public function sair(){
        session_start();
        unset($_SESSION['email_usuario']);
        unset($_SESSION['senha']);
        header("Location: ".base_url('login'));
        die;
    }
}
