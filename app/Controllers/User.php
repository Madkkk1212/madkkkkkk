<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data ['title'] = 'user';

        return view('user/index', $data);
    }


}
