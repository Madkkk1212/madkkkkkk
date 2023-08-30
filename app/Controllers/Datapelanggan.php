<?php

namespace App\Controllers;

class Datapelanggan extends BaseController
{
   
    protected $Modeldatapelanggan;
    public function __construct()
    {
        $this->Modeldatapelanggan = new \App\Models\Modeldatapelanggan();
    }

    public function index()
    { 
        $datapelanggan = $this->Modeldatapelanggan->findAll();
        
        $data  = [
            'datapelanggan' => $datapelanggan
        ];
        $data ['title'] = 'Data Pelanggan';
        return view('datapelanggan/index', $data );
    }
        public function save()
    {

        
        $this->Modeldatapelanggan->save([
                'nama' => $this->request->getVar('nama'),
                'nomortelepon' => $this->request->getVar('nomortelepon'),
                'alamat' => $this->request->getVar('alamat'),
                'kodepelanggan' => $this->request->getVar('kodepelanggan')
            ]);
         
            Session()->setFlashdata('pesan', 'DATA BERHASIL DITAMBAHKAN.');
            return redirect()->to('/datapelanggan/index');
    }

}
