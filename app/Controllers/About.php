<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data['title'] = 'datamasuk';

        return view('about/index', $data);
    }

}
