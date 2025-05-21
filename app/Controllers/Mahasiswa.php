<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mahasiswa',
            'content' => 'v_mahasiswa'
        ];
        return view('template', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Mahasiswa',
            'content' => 'v_mahasiswa_add'
        ];
        helper('form');
        return view('template', $data);
    }

    public function submit()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'nim' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'tanggalLahir' => 'required',
            // 'umur' => 'required|integer',
            // 'jurusan' => 'required',
        ];

        if ($this->validate($rules)) {
            echo 'Sukses data anda valid';
            $data = [
                'Nim' => $this->request->getPost('nim'),
                'Nama_Mhs' => $this->request->getPost('nama'),
                'Jenis_Kelamin' => $this->request->getPost('gender'),
                'Tgl_Lahir' => $this->request->getPost('tanggalLahir'),
                // 'umur' => $this->request->getPost('umur'),
                // 'jurusan' => $this->request->getPost('jurusan'),
            ];

            $model = new MahasiswaModel();
            $result = $model->insertData($data);
            if ($result) {
                return redirect()->to('/mahasiswa/show');
            } else {
                echo 'Data gagal disimpan';
            }

            // Used for display data
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
        } else {
            echo $validation->listErrors();
        }
    }

    public function show()
    {
        $model = new MahasiswaModel();
        $data = [
            'title' => 'Mahasiswa',
            'content' => 'v_mahasiswa',
            'getData' => $model->getAllData()
        ];
        return view('template', $data);
    }

    public function edit($id)
    {
        helper('form');
        $model = new MahasiswaModel();
        $data = [
            'title' => 'Edit Mahasiswa',
            'content' => 'v_mahasiswa_edit',
            'getData' => $model->getDataById($id)
        ];
        return view('template', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $rules = [
            // 'nim' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'tanggalLahir' => 'required',
        ];

        if ($this->validate($rules)) {
            echo 'Sukses data anda valid';
            // $nim = $this->request->getPost('nim');
            $data = [
                'Nim' => $this->request->getPost('nim'),
                'Nama_Mhs' => $this->request->getPost('nama'),
                'Jenis_Kelamin' => $this->request->getPost('gender'),
                'Tgl_Lahir' => $this->request->getPost('tanggalLahir'),
            ];

            $model = new MahasiswaModel();
            $result = $model->updateData($id, $data);
            if ($result) {
                return redirect()->to('/mahasiswa/show');
            } else {
                echo 'Data gagal disimpan';
            }
        } else {
            echo $validation->listErrors();
        }
    }

    public function delete($id) {
        $model = new MahasiswaModel();
        $result = $model->deleteData($id);
        if ($result) {
            return redirect()->to('/mahasiswa/show');
        } else {
            echo 'Data gagal dihapus';
        }
    }
}