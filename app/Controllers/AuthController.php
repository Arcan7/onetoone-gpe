<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function index()
    {
        return view('auth/login');
        // return view('page/dashboard');
    }

    public function register()
    {

    }

    public function inactiveAccount()
    {

    }

    public function activeAccount()
    {
        
    }

    public function login()
    {

    }

    public function logout()
    {

    }
}
