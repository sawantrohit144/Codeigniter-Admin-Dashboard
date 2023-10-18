<?php

namespace App\Controllers;
use App\Models\CustomerUsersModel;

class CustomerUser extends BaseController
{
  public function login()
  {
      $data = [];
      if ($this->request->getMethod() === 'post') {
          // Validate the user's input here (e.g., username and password).

          $model = new CustomerUsersModel();
          $user = $model->where('name', $this->request->getVar('name'))
                        ->first();

          if ($user!=null) {
              if ($user['password'] == $this->request->getVar('password')) {
                 return redirect()->to('CustomerDash');
               } else {
                 $data['error'] = 'Invalid username or password';
               }
          } else {
              $data['error'] = 'Invalid username or password';
          }
      }

      return view('customer/login', $data);
  }
  public function logout()
  {
      session()->destroy();
      return redirect()->to('customer/login');
  }
}

 ?>
