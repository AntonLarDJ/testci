<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        return view('pages/login');
    }

    public function login()
    {
        $request = $this->request->getPost();

        $user = new UserModel();

        if (!$user->CheckUser($request)) {
            return view('pages/login', [
                'error' => 'ошибка в данных',
                'request' => $request
            ]);
        } else {
            $userName = $user->where('email', $request['email'])->first()['name'];
            $session = \Config\Services::session();
            $session->set([
                'isLogin' => true,
                'userData' => [
                    'email' => $request['email'],
                    'name' => $userName
                ]
            ]);
            return redirect()->route('adminPage');
        }
    }
}
