<?php


// ROUTES BOOKS

if(isset($_GET['books'])):
    include_once '../app/routers/books.php';

// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: pagesController
// ACTION: home

else:
include_once "../app/controllers/pagesController.php";
\App\Controllers\PagesController\homeAction($connexion);

endif;