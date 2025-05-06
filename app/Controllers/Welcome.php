<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Welcome extends BaseController
{
    public function index()
    {
        //
    }

    public function old()
    {
        return view('old_welcome_message');
    }
}
