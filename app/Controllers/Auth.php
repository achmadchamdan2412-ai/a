<?php 
 
namespace App\Controllers; 
 
use App\Models\UserModel; 
 
class Auth extends BaseController 
{ 
    public function login() 
    { 
        helper(['form']); 
 
        if ($this->request->getMethod() === 'post') { 
            $rules = [ 
                'email'    => 'required|valid_email', 
                'password' => 'required|min_length[6]' 
            ]; 
 
            if (! $this->validate($rules)) { 
                return view('auth/login', ['validation' => $this->validator]); 
            } 
 
            $userModel = new UserModel(); 
            $user = $userModel->where('email', $this->request->getPost('email'))->first(); 
 
            if ($user && password_verify($this->request->getPost('password'), $user['password'])) { 
                session()->set([ 
                    'user_id'   => $user['id'], 
                    'username'  => $user['username'], 
                    'role'      => $user['role'], // misal: admin/user 
                    'logged_in' => true 
                ]); 
 
                return redirect()->to('/dashboard'); 
            } 
 
            session()->setFlashdata('msg', 'Email atau password salah'); 
            return redirect()->back(); 
        } 
 
        return view('auth/login'); 
    } 
 
    public function logout() 
    { 
        session()->destroy(); 
        return redirect()->to('/login'); 
    } 
}