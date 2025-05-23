<?php 
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model {
    protected $table = 'mahasiswa';

    public function getAllData() { 
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        return $builder->get()->getResult();
    }

    public function insertData($data) {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        return $builder->insert($data);
    }

    public function getDataById($id) {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        return $builder->where('Nim', $id)->get()->getRow();
    }

    public function updateData($id, $data) {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        return $builder->where('Nim', $id)->update($data);
    }

    public function deleteData($id) {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        return $builder->where('Nim', $id)->delete();
    }
}

?>