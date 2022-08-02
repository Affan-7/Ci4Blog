<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    public function login()
    {
        return view('pages/login');
    }

    public function register()
    {
        return view('pages/register');
    }

    public function registerUser()
    {
        helper('form');

        if (! $this->validate([
            'first_name' => 'required|min_length[3]|max_length[255]',
            'last_name' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|min_length[6]|valid_email|is_unique[users.email]|max_length[255]',
            'password' => 'required|min_length[8]|max_length[255]',
            'confirmPassword' => 'required|matches[password]'
        ],
        //custom error messages
        [
            'first_name' => [
                'required' => 'The first name is required.',
                'min_length' => 'The first name must be at least 3 characters in length.',
                'max_length' => 'The first name cannot exceed 255 characters in length.'
            ],
            'last_name' => [
                'required' => 'The last name is required.',
                'min_length' => 'The last name must be at least 3 characters in length.',
                'max_length' => 'The last name cannot exceed 255 characters in length.'
            ],
            'email' => [
                'required' => 'The email is required.',
                'valid_email' => 'A valid email is required.',
                'is_unique' => 'This email already exists.',
                'min_length' => 'The email must be at least 6 characters in length.',
                'max_length' => 'The email cannot exceed 255 characters in length.'
            ],
            'password' => [
                'required' => 'The passowrd is required.',
                'min_length' => 'The passowrd must be at least 8 characters in length.',
                'max_length' => 'The passowrd cannot exceed 255 characters in length.'
            ],
            'confirmPassword' => [
                'required' => 'The passowrd for confirmation is required.',
                'matches' => 'The passowrd doesn\'t match.'
            ]
        ])) {
            return view('pages/register',[
                'validation' => $this->validator,
            ]);
        }

        $model1 = new UsersModel();
        $model1->registerUser($_POST);

        echo 'Success';
    }
}
