<?php 

namespace App\Controllers;

use App\Models\User_model;

class Admin extends MY_Controller
{

    // ------------------------------------------------------------------------
    
    public function __construct() 
    {
        parent::__construct();
    }

    // ------------------------------------------------------------------------
    
    public function index()
    {
        return redirect()->to('admin/login');
    }

    // ------------------------------------------------------------------------
    
    public function home()
    {
        $user_model = new User_model();
        
        $this->data['users'] = $user_model->getMyUsers();

        return view('admin/home', $this->data);
    }
    
    // ------------------------------------------------------------------------
    
    public function login($submit = null)
    {
        if ($submit == null) {
            return view('admin/login', $this->data);
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
      

        $user_model = model(user_model::class);
        $result = $user_model->login('admin', $email, $password);

        if ($result == true) {

            session()->set('user_id', 1);
            session()->set('is_admin', 1);

            return redirect()->to('admin/home');
        } else {

            return redirect()->to('admin/login');
        }
    }
    
    // ------------------------------------------------------------------------

    public function logout()
    {
        session()->destroy();
        return redirect()->to('admin/login');
    }
    
    // ------------------------------------------------------------------------

    public function create_user()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user_model = model('User_model');
        $user_model->create($email, $password);
    }

    // ------------------------------------------------------------------------
    
    public function delete_user($user_id)
    {
        $userModel = new \App\Models\User_model();
        echo $userModel->myDelete($user_id);
    }
    
}
