<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;

    class Halaman extends Controller
    {
        public function index()
        {
            return view('welcome_message');
        }

        public function tampil()
        {
            return view('dashboard');
        }
    }

