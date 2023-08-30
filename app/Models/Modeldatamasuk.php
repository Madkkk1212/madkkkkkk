<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeldatamasuk extends Model
{
    protected $table = "datamasuk";
    protected $allowedFields = ['namapemasok', 'tanggal', 'kodebarang', 'namabarang', 'stokawal', 'stokmasuk', 'jumlahmasuk', 'keterangan'];

    public function getAll()
    {

        $builder = $this->db->table('datamasuk');
        $this->builder->join('distributor', 'datamasuk.id_distributor = distributor.id');
        $query = $this->builder->get();
        return $query->getResult();

    }
}
