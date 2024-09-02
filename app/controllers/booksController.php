<?php 
namespace App\Controllers\BooksController;

use \PDO, \App\Models\BooksModel;

function showAction(PDO $connexion, int $id){

    include_once '../app/models/booksModel.php';
    $book = BooksModel\findOneById($connexion, $id);

    global $content;
    ob_start();
    include '../app/views/books/show.php';
    $content = ob_get_clean();
}

function indexAction(PDO $connexion){
include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connexion);

    global $content;
    ob_start();
    include '../app/views/books/index.php';
    $content = ob_get_clean();
    
}