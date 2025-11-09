    <?php

    use CodeIgniter\Router\RouteCollection;

    /**
     * @var RouteCollection $routes
     *
     * This file defines application routes, including authentication and protected routes.
     */

    $routes->get('/login', 'Auth::login'); 
$routes->post('/login', 'Auth::login'); 
$routes->get('/logout', 'Auth::logout'); 
$routes->get('/forbidden', function() { 
return view('errors/custom_403'); 
}); 
// Grup route yang wajib login 
$routes->group('', ['filter' => 'auth'], function($routes) { 
$routes->get('/pasien', 'Pasien::index'); 
$routes->get('/asuransi', 'Asuransi::index'); 
}); 
 
// Grup route khusus admin 
$routes->group('admin', ['filter' => 'auth:admin'], function($routes) { 
    $routes->get('panel', 'Admin::index'); 
});