<?php

namespace App\Controllers;

use CodeIgniter\Validation\StrictRules\Rules;
use Config\Session;

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
            'title' => 'Distributor',
            'distributor' => $distributor,
            'validation' => \config\Services::validation()
        ];
                
        return view('distributor/index', $data );
    }
    
    public function save()
    {

            $this->Modeldistributor->save([
                'namapemasok' => $this->request->getVar('namapemasok'),
                'nomor' => $this->request->getVar('nomor'),
                'alamat' => $this->request->getVar('alamat'),
                'kodepelanggan' => $this->request->getVar('kodepelanggan')
            ]);
         
            Session()->setFlashdata('pesan', 'DATA BERHASIL DITAMBAHKAN.');
            return redirect()->to('/distributor/index');
    }
    public function hapus($id)
    {
        $this->Modeldistributor->delete($id);
        Session()->setFlashdata('pesan', 'DATA BERHASIL dihapus.');
        return redirect()->to ('/distributor/index');
    }

}
