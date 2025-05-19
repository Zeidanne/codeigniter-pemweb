<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegistrasiModel;

class Registrasi extends BaseController {
    function index() {
        $model = new RegistrasiModel();
        $data = [
            'source' => $model -> getSource()
        ];
        
        return view('v_registrasi', $data);
    }
}