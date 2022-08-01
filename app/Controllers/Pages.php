<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('pages/home');
    }
    
    public function about()
    {
        echo view('pages/about');
    }

    public function post()
    {
        echo view('pages/post');
    }

    public function newPost()
    {
        helper('form');

        $rules = [];

        if (! $this->validate($rules)) {
            return view('signup', [
                'validation' => $this->validator,
            ]);
        }else{
            redirect('/');
        }
    }
}
