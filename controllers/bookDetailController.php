<?php

//LOAD CLASSES
require_once("../model/BookManager.php");
require_once("../model/UserManager.php");
require_once("../entities/Book.php");
require_once("../entities/User.php");
require_once("../services/formChecker.php");

$BookManager = new BookManager();
$UserManager = new UserManager();
$FormChecker = new formChecker();


if (isset($_GET['id'])){

    $_GET['id'] = (int) $_GET['id'];
    if ($_GET['id'] >= 1){
      $book = new Book ($BookManager->getBookById($_GET['id']));
      $user = new User ($BookManager->getBookById($_GET['id']));
    }
}


if(!empty($_POST["borrowBook"])) {

  //VERIF
  $erreur  = $FormChecker->isFormEmpty($_POST);
  if(!empty($erreur)) {
    echo $erreur;
  }else{
  ?> <p>this book is already borrowed by : </p> <?php
   echo $BookManager->getUserBorrowBook($_GET['id']);
  $bookManager->updateBookUserCode();
  }
}



// INCLUDE VIEW
include "../views/detailView.php";


 ?>
