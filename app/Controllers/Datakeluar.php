<?php

namespace App\Controllers;
use App\Models\Modeldatakeluar;
use App\Models\Modeldatamasuk;
use App\Models\Modeldatapelanggan;

class datakeluar extends BaseController
{
        
    protected $Modeldatakeluar;
    protected $Modeldatamasuk;
    protected $Modeldatapelanggan;

    public function __construct()
    {
        $this->Modeldatakeluar = new \App\Models\Modeldatakeluar();
        $this->Modeldatamasuk = new \App\Models\Modeldatamasuk();
        $this->Modeldatapelanggan = new \App\Models\Modeldatapelanggan();
    }

    public function index()
    { 
        $datakeluar = $this->Modeldatakeluar->findAll();
        
        $data  = [
            'datakeluar' => $this->Modeldatakeluar->getAll()
            
        ];
        $data ['title'] = 'datakeluar';


        return view('datakeluar/index', $data );
    }

    public function hapus($id)
    {
        $this->Modeldatakeluar->Delete($id);
        return redirect()->to('datakeluar/index');
    }


}
