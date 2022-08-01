<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table      = 'posts';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['title'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    public function newPost($data)
    {   
        $this->allowedFields = ['title', 'subtitle', 'body'];
        $this->insert($data);
    }

    public function getPosts()
    {
        $posts = $this->findAll();
        return $posts;
    }

    public function getPost($postName)
    {
        $post = $this->where('title', $postName)->find();
        return $post;
    }
}