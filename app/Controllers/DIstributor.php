<?php

namespace App\Controllers;

class Distributor extends BaseController
{
    protected $Modeldistributor;
    public function __construct()
    {
        $this->Modeldistributor = new \App\Models\Modeldistributor();
    }

    public function index()
    { 
        $distributor = $this->Modeldistributor->findAll();
        
        $data  = [
            'distributor' => $distributor


        ];

        return view('distributor/index', $data );
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Distributor'
        ];
        
        return view('distributor/create', $data);
    }
}
