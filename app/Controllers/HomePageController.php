<?php

namespace App\Controllers;

class HomePageController extends BaseController
{
    public function index()
    {
        // authorization check
        $session = \Config\Services::session();
        
        return view('pages/home', ['isLogin' => $session->has('isLogin')]);
    }
}
