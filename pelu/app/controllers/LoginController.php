<?php

namespace App\Controllers;

use App\Models\Empleado;

class LoginController
{
    function __construct()
    {
        // echo "En LoginController";
    }
    public function index()
    {
        require "app/views/login.php";
    }
    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $employee = Empleado::findbyEmail($email);

        if (!$employee) {
            $_SESSION['message'] = 'Error, el usuario no existe. ';
            header('Location:/login');
        } else {
            //comporbar que la contraseña coincida con la cifrada
            if (Empleado::passwordVerify($password, $employee)) {
                $_SESSION['employee'] = $employee;
                header('Location:/home');
            } else {
                $_SESSION['message'] = 'Error, la contraseña es incorrecta';
                header('Location:/login');
            }
        }
    }
    public function logout()
    {
        unset($_SESSION['employee']);
        unset($_SESSION['message']);
        session_destroy();
        require "app/views/login.php";
    }
}
