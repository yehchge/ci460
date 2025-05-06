<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Smarty extends BaseController
{
    public function index()
    {
        $smarty = service('smarty');
        // $smarty = Services::smarty();

        $time = date('Y-m-d H:i:s');
        $smarty->setTemplateDir(APPPATH.'Views');
        $smarty->setLeftDelimiter("{");
        $smarty->setRightDelimiter("}");
        $smarty->assign('username', 'Laravel');
        $smarty->assign('time', $time);

        return $smarty->display('template.tpl');

        // return \CI4Smarty\view('template');
    }
}
