<?php

namespace App\Controllers;
use App\Models\Modeldatapenjualan;
use App\Models\Modeldistributor;

class Datapenjualan extends BaseController


{
    protected $Modeldatapenjualan;
    protected $Modeldistributor;

    public function __construct()
    {
        $this->Modeldatapenjualan = new \App\Models\Modeldatapenjualan();
        $this->Modeldistributor = new \App\Models\Modeldistributor();
    }

    public function index()
    { 
        $datapenjualan = $this->Modeldatapenjualan->findAll();
        
        $data  = [
            'datapenjualan' => $this->Modeldatapenjualan->getAll($datapenjualan)
        ];

        return view('menu/datapenjualan', $data );
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Distributor'
        ];
        
        return view('distributor/create', $data);
    }
}
