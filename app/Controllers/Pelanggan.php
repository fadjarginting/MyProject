<?php

use CodeIgniter\Controller;
namespace App\Controllers;

class Pelanggan extends BaseController
{
    public function dashboard()
    {
        return View('/pelanggan/dashboard_pelanggan');
    }

    public function produk()
    {
        return View('/pelanggan/produk');
    }
    

}
