<?php 

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard_admin()
    {
        return view('admin/dashboard_admin');
    }
}