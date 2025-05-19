<?php

namespace App\Controllers;

class Mahasiswa extends BaseController {
    public function index() {
        $session = session();
        $data = [
            'title' => 'Mahasiswa',
            'content' => 'v_mahasiswa',
            'mahasiswa' => $session->get('mahasiswa') ?? []
        ];
        return view('template', $data);
    }

    public function add() {
        helper('form');
        $data = [
            'title' => 'Tambah Mahasiswa',
            'content' => 'v_mahasiswa_add',
            'validation' => \Config\Services::validation(), // Kirim validasi ke view
            'error_message' => session()->getFlashdata('error_message') // Kirim pesan error jika ada
        ];
        return view('template', $data);
    }

    public function save() {
        // Aturan validasi
        $rules = [
            'nim' => 'required|numeric|min_length[3]|max_length[13]',
            'nama' => 'required|alpha_space|min_length[3]|max_length[50]',
            'jenis_kelamin' => 'required|in_list[Laki-laki,Perempuan]',
            'tanggal_lahir' => 'required|valid_date[d-m-Y]'
        ];

        if (!$this->validate($rules)) {
            // Jika validasi gagal, set pesan error dan kembali ke form
            session()->setFlashdata('error_message', 'Data tidak berhasil disimpan. Silakan periksa input Anda.');
            return redirect()->to(base_url('mahasiswa/add'))
                ->withInput()
                ->with('validation', $this->validator);
        }

        $session = session();
        $mahasiswa = $session->get('mahasiswa') ?? [];

        // Tambahkan data baru dari form
        $mahasiswa[] = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
        ];

        // Simpan kembali ke session
        $session->set('mahasiswa', $mahasiswa);

        // Redirect ke halaman utama
        return redirect()->to(base_url('mahasiswa'));
    }
}