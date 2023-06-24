<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    protected object $blogModel,$db;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
        $this->db = \Config\Database::connect();
    }
    public function index(){

        $query = 'SELECT * FROM articletbl
        LEFT JOIN categories ON articletbl.article_language = categories.language_id';

        $result = $this->db->query($query);

        $data = $result->getResult();

        if(count($data)){
            return view('blog', ['data' => $data]);
        }
    }

    //Search Method
    public function search(){
        $searchName = $this->request->getPost('search');

        $query = "SELECT a.article_title, c.category_name, l.language_name FROM articletbl a
        LEFT JOIN categories c on a.article_category = c.id
        LEFT JOIN languages l on a.article_language = l.id
        WHERE a.article_title LIKE '%" . $searchName . "%'";
        $res = $this->db->query($query);
        $data = $res->getResult();

        if($data){
            echo '<pre>';
            print_r($data);
            die();
        }else{
            return 'No data found';
        }

    }
}