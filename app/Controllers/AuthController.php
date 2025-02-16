<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        return view('login'); // Menampilkan halaman login
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $model->getUserByUsername($username);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Update last_login field with current timestamp
                $model->update($user['id'], ['last_login' => date('Y-m-d H:i:s')]);
    
                // Set session
                $session->set([
                    'isLoggedIn' => true,
                    'username' => $user['username'],
                    'last_login' => $user['last_login'], // Set last login session
                ]);
    
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('error', 'Password salah.');
                return redirect()->back();
            }
        } else {
            $session->setFlashdata('error', 'Username tidak ditemukan.');
            return redirect()->back();
        }
        
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
