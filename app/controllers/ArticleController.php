<?php
require_once('services/ArticleService.php');
require_once('models/Article.php');

class ArticleController {
    public function index(){

        // Lay du lieu CAN tu service tuong ung
        $articleService = new ArticleService();
        $articles = $articleService->getAll();
       //$articles = ArticleService::getAllArticles();

       // Render ra view
       include("views/index.php");
    } 
    public function create(){
        $articleService = new ArticleService();
      
        if(isset($_POST['add'])){
        
            $title = $_POST['title'];
            $author = $_POST['author'];
            $publish = $_POST['publish'];

       
            $newArticle = new Article(null, $title, $author, $publish);
            $articleService->insertData($newArticle);
            echo "ADD new successfully";
            header("location: index.php?controller=article&action=index");}
            
        
        // Render ra view
        include("views/create.php");
    } 
    
    public function edit(){
        $articleService = new ArticleService();
        $id = $_GET['id'];
        $chosenArticle = $articleService->getData($id);
        if(isset($_POST['edit'])){
        
            
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publish = $_POST['publish'];
            
        $chosenArticle->setTitle($title);
        $chosenArticle->setAuthor($author);
        $chosenArticle->setPublish($publish);
        $articleService->updateData($chosenArticle);
        echo "Edit successfully";
        header("location: index.php?controller=article&action=index");}
        // Render ra view
        include("views/edit.php");
    } 
    public function show(){
        
    } 
    public function delete(){
        $articleService = new ArticleService();
        $id = $_GET['id'];
        $chosenArticle = $articleService->getData($id);
        if(isset($_POST['delete'])){
            $articleService->deleteData($chosenArticle);
            header("location: index.php?controller=article&action=index");
        }
        else if(isset($_POST['noDelete'])){
            header("location: index.php?controller=article&action=index");
        }
        // Render ra view
        include("../app/views/delete.php");
    } 
}