<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeldistributor extends Model
{
    protected $table = "distributor";
    protected $allowedFields = ['name', 'nomor', 'alamat', 'kodepelanggan'];
}