<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model {

    protected $table = 'user';
    protected $primaryKey = 'user_id';
    // protected $useAutoIncrement = true;

    // public function __construct()
    // {
    //     parent::__construct();
    // }
    
    /**
     *  Get one or many users
     *  
     *  @param integer|void $user_id
     *  
     *  @return array 
     */
    public function getMyUsers($user_id = null)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('user');

        if ($user_id == null) {
            $query = $builder->get();
        } else {
            $query = $builder->getWhere(array('user_id' => $user_id));
        }

        return $query->getResult();
    }
    
    /**
     *  Attempts to validate and log a user in
     *  
     *  @param string $type admin or user
     *  @param string $email
     *  @param string $password do not encrypt
     *  
     *  @return array
     */
    public function login($type, $email, $password)
    {

        $query = $this->getWhere(array(
            'type' => $type,
            'email' => $email,
            'password' => sha1($password . HASH_KEY)
        ));


        return $query->getRow();
    }
    
    public function create($email, $password)
    {
        $validation = service('validation');
        $validation->setRule('email', 'Email', 'is_unique[user.email]');

        $data = [
            'email' => $email,
            'password' => $password
        ];

        if ($validation->run($data) == false) {
            $errors = $validation->getErrors();
            foreach ($errors as $key => $message) {
                echo "$key: $message<br>";
            }
            exit;
        }

        $db      = \Config\Database::connect();
        $builder = $db->table('user');

        // Create the record
        $result = $builder->insert(array(
            'email' => $email,
            'password' => sha1($password . HASH_KEY),
            'date_added' => date('Y-m-d H:i:s')
        ));
        return $result;
    }
    
    public function myDelete($user_id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('user');

        $query = $builder->where(array('user_id' => $user_id));
        echo $query->delete();
    }
}