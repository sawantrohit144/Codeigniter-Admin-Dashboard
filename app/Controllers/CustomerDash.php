<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CustomerDash extends BaseController
{
    public function dash()
    {
        // Your dashboard logic here
        return view('customer/customer_dash');
    }
}
