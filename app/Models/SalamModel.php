<?php
namespace App\Models;

use CodeIgniter\Model;

class SalamModel extends Model{
    function getData($params){
        return "Selamat Datang di CodeIgniter 4 Halo " . $params . " Semoga Harimu Menyenangkan"; 
    }
}
?>