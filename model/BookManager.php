<?php

class BookManager {

  //DB CONNECT
  public function getDb() {
    $db = new PDO('mysql:host=localhost;dbname=library', "root", "Paperback1966");
    return $db;
  }

  //ADD BOOK
  public function addBook(Book $Book) {
    $db = $this->getDb();
    $request = $db->prepare("INSERT INTO books (title, author, releaseDate, type, summary, status, userCode)
                             VALUES(:title, :author, :releaseDate , :type , :summary , :status , :userCode)");
    $request->execute([
      ":title"=> $Book->getTitle(),
      ":author"=> $Book->getAuthor(),
      ":releaseDate"=> $Book->getReleaseDate(),
      ":type"=> $Book->getType(),
      ":summary"=> $Book->getSummary(),
      ":status"=> $Book->getStatus(),
      ":userCode"=> $Book->getUserCode()
    ]);
  }

  // GET ALL BOOKS
  public function getBooks() {

    // CONNECT DB
    $db = $this->getDb();

    // GET ALL BOOKS IN DB
    $request = $db->query("SELECT * FROM books");

    // ARRAY WITH ALL DB STOCKED IN VAR $DATA
    $data = $request->fetchAll(PDO::FETCH_ASSOC);

    // FOREACH MAKE OBJECTS WITH DATABASE LINES
    foreach ($data as $key => $value) {
      $data[$key] = new Book($value);
    }
    //RETURN RESULT $DATA = AN ARRAY WITH ALL OBJECTS "BOOK"
    return $data;
  }


  // GET BOOKS BY TYPE
  public function getBooksByType($type) {

    // CONNECT DB
    $db = $this->getDb();

    // GET SF BOOKS IN DB
    $request = $db->query("SELECT * FROM books WHERE type= $type");

    // ARRAY WITH ALL DB STOCKED IN VAR $DATA
    $data = $request->fetchAll(PDO::FETCH_ASSOC);

    // FOREACH MAKE OBJECTS WITH DATABASE LINES
    foreach ($data as $key => $value) {
      $data[$key] = new Book($value);
    }
    //RETURN RESULT $DATA = AN ARRAY WITH ALL OBJECTS "BOOK" OF THE WANTED TYPE
    return $data;
  }

  

}

 ?>
