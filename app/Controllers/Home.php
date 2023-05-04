<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'My Page',
            'title' => 'Tranquillero',
        ];

        $posts = ['Title 1', 'Title 2', 'Title 3']; 
        $data['posts'] = $posts;

        echo view('header', $data);
        echo view('homepage');
        echo view('footer');
    }
    


}