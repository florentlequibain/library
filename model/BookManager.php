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

    // GET BOOK IN DB WHERE ARG = $TYPE
    $request = $db->prepare("SELECT * FROM books WHERE type= ?");
    $request->execute([$type]);

    // ARRAY WITH ALL DB STOCKED IN VAR $DATA
    $data = $request->fetchAll(PDO::FETCH_ASSOC);

    // FOREACH MAKE OBJECTS WITH DATABASE LINES
    foreach ($data as $key => $value) {
      $data[$key] = new Book($value);
    }
    //RETURN RESULT $DATA = AN ARRAY WITH ALL OBJECTS "BOOK" OF THE WANTED TYPE
    return $data;
  }


  // GET BOOKS BY ID
  public function getBookById($id) {

    // CONNECT DB
    $db = $this->getDb();

    // GET BOOK IN DB WHERE ID = $ID
    $request = $db->prepare("SELECT * FROM books WHERE idBook= ?");
    $request->execute([$id]);

    // ARRAY WITH ONE DB LINE STOCKED IN VAR $DATA
    $data = $request->fetch(PDO::FETCH_ASSOC);
    $book = new Book($data);
    return $data;
  }

  // DELETE BOOK
public function deleteBook($idBook) {
  $db = $this->getDb();

  $request = $db->prepare("DELETE FROM books WHERE idBook= ?");
  $request->execute([$idBook]);
}


}

 ?>
