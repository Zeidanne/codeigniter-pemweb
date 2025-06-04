<?php
namespace App\Modules\Dosen\Controllers;

use App\Controllers\BaseController;
use App\Modules\Dosen\Models\DosenModel;

class Dosen extends BaseController
{
    public function index()
    {
        $model = new DosenModel();
        $data = [
            'title' => 'Dosen',
            'content' => '\App\Modules\Dosen\Views\v_dosen',
            'getData' => $model->getAllData(),
        ];
        return view('template', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Dosen',
            'content' => '\App\Modules\Dosen\Views\v_dosen_add'
        ];
        helper('form');
        return view('template', $data);
    }

    public function edit($id)
    {
        helper('form');
        $model = new DosenModel();
        $data = [
            'title' => 'Edit Dosen',
            'content' => '\App\Modules\Dosen\Views\v_dosen_edit',
            'getData' => $model->getDataById($id)
        ];
        return view('template', $data);
    }

    public function submit()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'nip' => 'required',
            'nama' => 'required',
            'bidang' => 'required',
        ];

        if ($this->validate($rules)) {
            echo 'Sukses data anda valid';
            $data = [
                'nip' => $this->request->getPost('nip'),
                'nama_dosen' => $this->request->getPost('nama'),
                'bidang_ilmu' => $this->request->getPost('bidang'),
            ];

            $model = new DosenModel();
            $result = $model->insertData($data);
            if ($result) {
                return redirect()->to('/dosen');
            } else {
                echo 'Data gagal disimpan';
            }
        } else {
            echo $validation->listErrors();
        }
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $rules = [
            'nip' => 'required',
            'nama' => 'required',
            'bidang' => 'required',
        ];

        if ($this->validate($rules)) {
            echo 'Sukses data anda valid';
            $data = [
                'nip' => $this->request->getPost('nip'),
                'nama_dosen' => $this->request->getPost('nama'),
                'bidang_ilmu' => $this->request->getPost('bidang'),
            ];

            $model = new DosenModel();
            $result = $model->updateData($id, $data);
            if ($result) {
                return redirect()->to('/dosen');
            } else {
                echo 'Data gagal disimpan';
            }
        } else {
            echo $validation->listErrors();
        }
    }

    public function delete($id) {
        $model = new DosenModel();
        $result = $model->deleteData($id);
        if ($result) {
            return redirect()->to('/dosen');
        } else {
            echo 'Data gagal dihapus';
        }
    }
}