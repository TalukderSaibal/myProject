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

        $query = 'SELECT articletbl.id AS articleId, articletbl.article_title AS articleTitle, articletbl.article_content AS articleContent, articletbl.article_image AS articleImage, articletbl.article_description AS articleDescription, categories.* FROM articletbl
        JOIN categories ON articletbl.id = categories.id';

        $query1 = 'SELECT id,category_name FROM categories';

        $result = $this->db->query($query);

        $result1 = $this->db->query($query1);

        $data = $result->getResult();

        $data1 = $result1->getResult();

        if(count($data)){
            return view('blog', ['data' => $data, 'data1' => $data1]);
        }
    }

    //Blog show method
    public function blogShow($id){
        $data = $this->blogModel->findAll($id);

        return view('blogView', ['data' => $data]);
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
            echo json_encode($data);
        }else{
            return 'No data found';
        }

    }

    public function showBlog(){
        $query = 'SELECT articletbl.id AS articleId, articletbl.article_title AS articleTitle, articletbl.article_content AS articleContent, articletbl.article_image AS articleImage, articletbl.article_description AS articleDescription, categories.* FROM articletbl
        JOIN categories ON articletbl.id = categories.id';

        $result = $this->db->query($query);

        $data = $result->getResult();

        echo json_encode($data);
    }

    public function categoryShow(){
        $categoryId = $this->request->getGet('categoryId');

        $query = 'SELECT * FROM categories
        JOIN articletbl on categories.id = articletbl.article_category
        WHERE categories.id='.$categoryId;

        $result = $this->db->query($query);
        $data = $result->getResult();
        if($data){
            foreach($data as $row){
                $articleTitle = $row->article_title;
                $articleImage = $row->article_image;
                $articleContent = $row->article_content;
                $articleDescription = $row->article_description;
                $div = '<div style="background:aqua">'. $articleTitle .'</div>';
                $image = '<img src="articleImage/'.$articleImage.'"</img>';
                $content = '<div>'. $articleContent. '</div>';
                $content = '<div>'. $articleDescription. '</div>';
                echo $image .$div . $content . $content;
            }
        }
    }
}