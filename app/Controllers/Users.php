<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function login()
    {
        return view('pages/login');
    }
}
