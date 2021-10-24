<?php

namespace App\Controllers\Admin;

class AdminController extends BaseController
{

    public function index()
    {
        $session = \Config\Services::session();

        return view('pages/admin/main', ['userData' => $session->get('userData')]);
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->route('homePage');
    }

    public function wrongAuth()
    {
        return view('pages/admin/wrongAuth');
    }
}
