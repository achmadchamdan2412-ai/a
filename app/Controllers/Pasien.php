<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pasien extends BaseController
{
    protected $pasienModel;

    public function __construct(\App\Models\PasienModel $pasienModel)
    {
        $this->pasienModel = $pasienModel;
    }

    public function index()
    {
        $data['pasien'] = $this->pasienModel->findAll();
        return view('pasien', $data);
    }
}
