<?php

namespace App\Controllers;

class BlogController extends BaseController
{
    public function index(){
        return view('blog');
    }
}