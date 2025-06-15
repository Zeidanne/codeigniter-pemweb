<?php
namespace App\Modules\Produk\Models;

use CodeIgniter\Model;

class ProdukModel extends Model{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'harga', 'stok', 'kategori_id'];
    protected $useTimestamps = true;
    public function getAllProduk() {
        return $this->db->table('produk')
            ->select('produk.*, kategori.nama_kategori as nama_kategori')
            ->join('kategori', 'kategori.id = produk.kategori_id')
            ->get()
            ->getResultArray();
    }

    public function getDataById($id) {
        return $this->db->table('produk')
            ->select('produk.*, kategori.nama_kategori as nama_kategori')->join('kategori', 'kategori.id = produk.kategori_id')
            ->where('produk.id', $id)
            ->get()
            ->getRowArray();
    }
}
?>