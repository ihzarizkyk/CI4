<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        return view("auth/login");
    }

    public function login()
    {
       //
    }

    public function logout()
    {
       //
    }
}
