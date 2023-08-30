<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeldistributor extends Model
{
    protected $table = "distributor";
    protected $allowedFields = ['namapemasok', 'nomor', 'alamat', 'kodepelanggan'];


    function getAll()
    {
      
          $builder = $this->db->table('distributor');   
          $query = $builder->get();
          return $query->getResult();   

    }
    public function hapus($id)
    {
        return $this->db->table('distributor')->delete(['id'=> $id]);
    }
                 
}