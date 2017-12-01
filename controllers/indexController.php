<?php

//LOAD CLASSES
require_once("../model/BookManager.php");
require_once("../model/UserManager.php");
require_once("../entities/Book.php");
require_once("../entities/User.php");
require_once("../services/formChecker.php");

$FormChecker = new formChecker();
$BookManager = new BookManager();
$UserManager = new UserManager();


// ADD A BOOK

//CHECK IF USER ADD A BOOK
if(!empty($_POST["addBook"])) {

  //CALL FORM CHECKER
  $erreur  = $FormChecker->isFormEmpty($_POST);
  if(!empty($erreur)) {
    echo $erreur;
  }
  else{
    var_dump($_POST);
    //IF OK CREATE NEW BOOK OBJECT
    $book = new Book($_POST);
    var_dump($book);
    //ADD OBJECT TO DB
    $BookManager->addBook($book);
  }
}


// SELECT BOOKS BY TYPE
var_dump($_POST["selectTypeDropdown"]);


if(!empty($_POST["selectTypeDropdown"]) && $_POST["selectTypeDropdown"] != "all" ) {
    $books = $BookManager->getBooksByType($_POST["selectTypeDropdown"]);
  }else{
    $books = $BookManager->getBooks();
  }




//SHOW ALL BOOKS -

//SHOW ALL USERS-
$users = $UserManager->getUsers();


// INCLUDE VIEW
include "../views/indexView.php";
 ?>
