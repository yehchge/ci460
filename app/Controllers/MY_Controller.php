<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MY_Controller extends BaseController {

    public $data = array();

    // ------------------------------------------------------------------------
    
    public function __construct() 
    {
        $this->data['header'] = view('inc/header');
        $this->data['footer'] = view('inc/footer');
    }
    
    // ------------------------------------------------------------------------
}