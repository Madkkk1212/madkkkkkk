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
        $data ['title'] = 'Data Penjualan';
        return view('datapenjualan/index', $data );
        
    }

    public function save()
    {

        
        $this->Modeldatapenjualan->save([
                'kodepelanggan' => $this->request->getVar('kodepelanggan'),
                'kodebarang' => $this->request->getVar('kodebarang'),
                'namabarang' => $this->request->getVar('namabarang'),
                'harga' => $this->request->getVar('harga'),
                'jumlah' => $this->request->getVar('jumlah'),
                'totalharga' => $this->request->getVar('totalharga'),
                'metodepembayaran' => $this->request->getVar('metodepembayaran'),
                'keterangan' => $this->request->getVar('keterangan')
            ]);
         
            Session()->setFlashdata('pesan', 'DATA BERHASIL DITAMBAHKAN.');
            return redirect()->to('/datapenjualan/index');
    }
}
