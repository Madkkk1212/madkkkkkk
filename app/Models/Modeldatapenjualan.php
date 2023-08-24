<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeldatapenjualan extends Model
{
  protected $table = "datapenjualan";
  protected $allowedFields = ['kodepelanggan', 'kodebarang', 'namabarang', 'harga', 'jumlah', 'totalharga', 'metodepembayaran', 'keterangan'];

    function getAll()
    {
      
          $builder = $this->db->table('datapenjualan');   
          $builder->join('distributor', 'distributor.id = datapenjualan.id');   
          $query = $builder->get();
          return $query->getResult();   

 
    }
}
