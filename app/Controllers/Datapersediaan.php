<?php

namespace App\Controllers;

class Datapersediaan extends BaseController
{
    public function index()
    {
        $data ['title'] = 'Data Persediaan';

        return view('datapersediaan/index', $data );
    }

}
