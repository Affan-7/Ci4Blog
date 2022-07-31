<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/home');
        echo view('templates/footer');
    }
    
    public function about()
    {
        echo view('templates/header');
        echo view('pages/about');
        echo view('templates/footer');
    }

    public function post()
    {
        // echo view('templates/header');
        echo view('pages/post');
        // echo view('templates/footer');
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
