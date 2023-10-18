<?php

namespace App\Controllers;

use App\Models\AdminUserModel;
use CodeIgniter\Controller;

class AdminUser extends BaseController
{
    public function login()
    {
        $data = [];
        if ($this->request->getMethod() === 'post') {
            // Validate the user's input here (e.g., username and password).

            $model = new AdminUserModel();
            $user = $model->where('username', $this->request->getVar('username'))
                          ->first();

            if ($user!=null) {
                if ($user['password'] == $this->request->getVar('password')) {
                   return redirect()->to('dashboard');
                 } else {
                   $data['error'] = 'Invalid username or password';
                 }
            } else {
                $data['error'] = 'Invalid username or password';
            }
        }

        return view('admin/login', $data);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}


 ?>
