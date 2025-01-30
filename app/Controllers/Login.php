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
        $session = session();
        $request = service('request');

        if ($request->getMethod() === 'post') {
            $validation = \Config\Services::validation();

            $validation->setRules([
                'username' => 'required',
                'password' => 'required'
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                return redirect()->back()->withInput()->with('error', 'Username and password are required.');
            }

            $username = $request->getPost('username');
            $password = $request->getPost('password');

            $userModel = new User();
            $user = $userModel->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'logged_in' => true
                ]);

                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid username or password.');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
