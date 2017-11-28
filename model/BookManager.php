<?php

class BookManager {

  //DB CONNECT
  public function getDb() {
    $db = new PDO('mysql:host=localhost;dbname=library', "root", "Paperback1966");
    return $db;
  }



  // GET ALL ACCOUNTS
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


}

 ?>
