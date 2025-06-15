<?php

namespace App\Modules\Produk\Controllers;

use App\Modules\Produk\Models\ProdukModel;
use CodeIgniter\RESTful\ResourceController;

class Produk extends ResourceController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProdukModel();
    }

    public function index()
    {
        $data = [
            'produk' => $this->model->getAllProduk()
        ];
        return $this->respond($data);
    }

    public function show($id = null)
    {
        $data = $this->model->getDataById($id);
        if ($data) {
            return $this->respond($data);
        }
        return $this->failNotFound('Produk tidak ditemukan');
    }
}
