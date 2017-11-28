<?php

//LOAD CLASSES
require_once("../model/BookManager.php");
require_once("../entities/Book.php");
require_once("../entities/User.php");

$BookManager = new BookManager();

//

//

//



//SHOW ALL BOOKS -
$books = $BookManager->getBooks();



// INCLUDE VIEW
include "../views/indexView.php";
 ?>
