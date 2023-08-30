<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeldatapelanggan extends Model
{
    protected $table = "datapelanggan";
    protected $allowedFields = ['nama', 'nomortelpon', 'alamat', 'kodepelanggan'];
}
