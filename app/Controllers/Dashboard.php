<?php 

namespace App\Controllers;

use App\Models\User_model;

class Dashboard extends MY_Controller
{

    // ------------------------------------------------------------------------

    public function __construct() 
    {
        parent::__construct();
    }
    
    // ------------------------------------------------------------------------
    
    public function index()
    {
        return redirect()->to('dashboard/login');
    }
    
    // ------------------------------------------------------------------------
    
    public function login($submit = null)
    {
        // echo sha1('admin' . HASH_KEY);
        // echo sha1('test' . HASH_KEY);
        if ($submit == null) {
            return view('dashboard/login', $this->data);
            // return true;
        }
        
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $model = model(User_model::class);
        $result = $model->login('user', $email, $password);
        
        if ($result == true) {
            session()->set('user_id', 1);
            return redirect()->to('dashboard/home');
        } else {
            return redirect()->to('dashboard/login');
        }
    }
    
    // ------------------------------------------------------------------------
    
    public function home()
    {
        $user_id = session()->get('user_id') ?? 0;
        if (!$user_id) {
            return redirect()->to('dashboard/login');            
        }
        return view('dashboard/home', $this->data);
    }
        
    // ------------------------------------------------------------------------
    
    public function account()
    {
        $user_id = session()->get('user_id') ?? 0;
        if (!$user_id) {
            return redirect()->to('dashboard/login');            
        }
        return view('dashboard/account', $this->data);
    }
    
    // ------------------------------------------------------------------------
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('dashboard/login');
    }
    
    // ------------------------------------------------------------------------
    
}
