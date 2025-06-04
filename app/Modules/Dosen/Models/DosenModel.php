<?php 
namespace App\Modules\Dosen\Models;

use CodeIgniter\Model;

class DosenModel extends Model {
    protected $table = 'dosen';

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
        return $builder->where('id_dosen', $id)->get()->getRow();
    }

    public function updateData($id, $data) {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        return $builder->where('id_dosen', $id)->update($data);
    }

    public function deleteData($id) {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        return $builder->where('id_dosen', $id)->delete();
    }
}

?>