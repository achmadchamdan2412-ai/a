<?php 
 
namespace App\Filters; 
 
use CodeIgniter\HTTP\RequestInterface; 
use CodeIgniter\HTTP\ResponseInterface; 
use CodeIgniter\Filters\FilterInterface; 
 
class AuthFilter implements FilterInterface 
{ 
    public function before(RequestInterface $request, $arguments = null) 
    { 
        // Jika belum login 
        if (! session()->get('logged_in')) { 
            return redirect()->to('/login')->with('msg', 'Silakan login terlebih dahulu.'); 
        } 
 
        // Jika ada role yang dibatasi (misal 'admin') 
        if ($arguments && isset($arguments[0])) { 
            $requiredRole = $arguments[0]; 
            if (session()->get('role') !== $requiredRole) { 
                return redirect()->to('/forbidden')->with('msg', 'Akses ditolak!'); 
            } 
        } 
    } 
 
public function after(RequestInterface $request, ResponseInterface $response, $arguments 
= null) 
{ 
} 
}