<?php

namespace App\Controllers;
use App\Models\Modeldatamasuk;
use App\Models\Modeldatapelanggan;

class Datamasuk extends BaseController
{
        
    protected $Modeldatamasuk;
    protected $Modeldatapelanggan;

    public function __construct()
    {
        $this->Modeldatamasuk = new \App\Models\Modeldatamasuk();
        $this->Modeldatapelanggan = new \App\Models\Modeldatapelanggan();
    }

    public function index()
    { 
        $datamasuk = $this->Modeldatamasuk->findAll();
        $data  = [
            'datamasuk' => $this->Modeldatamasuk->getAll()
        ];
        $data ['title'] = 'datamasuk';
        
        return view('datamasuk/index', $data );
    }


}
