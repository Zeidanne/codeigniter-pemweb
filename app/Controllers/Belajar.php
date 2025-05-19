<?php

namespace App\Controllers;

use App\Models\OperasiModel;

class Belajar extends BaseController
{
    public function index() {
        echo "hai";
    }

    public function kali($a, $b)
    {
        $hasil = $a * $b;
        echo "Hasil perkailan: " . $hasil;
    }

    public function bagi($a, $b)
    {
        $hasil = $a / $b;
        echo "Hasil permbagian: " . $hasil;
    }

    public function pesan() {
        $data = [
            'title' => 'Belajar CodeIgniter',
            'pesan' => 'Saya sedang belajar View pada CodeIgniter'
        ];
        return view ('v_belajar_pesan', $data);
    }

}
