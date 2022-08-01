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
        $data = [];
        helper('form');

        if (! $this->validate([
            'title' => 'required|min_length[5]', //validation rules
            'body' => 'required|min_length[5]',
        ],

        //Custom error messages
        ['title' => [
            'required' => 'The post title is required',
            'min_length'=> 'Minimum 5 charecters are required for post title'
        ],
        'body' => [
            'required' => 'The post body is required',
            'min_length'=> 'Minimum 5 charecters are required for post body'
        ]
        ])) {
            return view('pages/post', [
                'validation' => $this->validator,
            ]);
        }

        $data['success'] = true;
        return view('pages/home', $data);
    }
    
}
