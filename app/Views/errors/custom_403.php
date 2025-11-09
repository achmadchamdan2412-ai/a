<?php 
 
namespace App\Controllers; 
 
class Dashboard extends BaseController 
{ 
    public function index() 
    { 
        return view('dashboard', [ 
            'username' => session()->get('username'), 
            'role' => session()->get('role') 
        ]); 
    } 
}