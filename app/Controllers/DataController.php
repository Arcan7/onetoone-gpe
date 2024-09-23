<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DataController extends BaseController
{
    public function index()
    {
        return view('page/brute_data');
    }
}
