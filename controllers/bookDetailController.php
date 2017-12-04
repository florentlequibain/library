<?php

//LOAD CLASSES
require_once("../model/BookManager.php");
require_once("../model/UserManager.php");
require_once("../entities/Book.php");
require_once("../entities/User.php");
require_once("../services/formChecker.php");

$BookManager = new BookManager();
$UserManager = new UserManager();

if (isset($_GET['id'])){

    $_GET['id'] = (int) $_GET['id'];
    if ($_GET['id'] >= 1){
      $book = new Book ($BookManager->getBookById($_GET['id']));
    }
}




// INCLUDE VIEW
include "../views/detailView.php";


 ?>
