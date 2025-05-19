<?php

namespace App\Libraries;

Class CustomLib {
    public function nama_saya() {
        return "hello, nama saya Hal";
    }
    
    public function nama_kamu($nama) {
        return "hello, nama kamu adalah ". $nama;
    }
}