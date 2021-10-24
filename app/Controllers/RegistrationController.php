<?php

namespace App\Controllers;

use App\Models\UserModel;

class RegistrationController extends BaseController
{
    public function index()
    {
        return view('pages/registration');
    }

    public function registration()
    {
        $validation =  \Config\Services::validation();
        $validation->setRuleGroup('registration');

        $request = $this->request->getPost();

        $validation->run($request);
        $errors = $validation->getErrors();

        if (count($errors) > 0) {
            return view('pages/registration', [
                'errors' => $errors,
                'oldRequest' => $request
            ]);
        } else {
            $user = new UserModel();
            $user->AddUser($request);

            $session = \Config\Services::session();
            $session->set([
                'isLogin' => 'true',
                'userData' => [
                    'email' => $request['email'],
                    'name' => $request['name']
                ]
            ]);

            return redirect()->route('adminPage');
        }
    }
}
