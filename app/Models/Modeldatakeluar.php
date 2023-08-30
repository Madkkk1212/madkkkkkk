<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeldatakeluar extends Model
{
    protected $table = "datakeluar";
    protected $primaryKey = 'id';
    protected $allowedFields = ['namapelanggan', 'tanggal', 'kodebarang', 'stokawal', 'stokkeluar', 'stokmasuk', 'jumlahstok', 'keterangan'];

    public function getAll()
    {
        
        $builder = $this->db->table('datakeluar');        
        $this->builder->join('datamasuk', 'datamasuk.kodebarang = datakeluar.kodebarang' );
        $query = $builder->get();
        return $query->getResult();

    }

    public function hapus($id)
    {
        return $this->db->table('datakeluar')->Delete('awa');
    }

}
 