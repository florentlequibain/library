<?php

class UserManager {

  //DB CONNECT
  public function getDb() {
    $db = new PDO('mysql:host=localhost;dbname=library', "root", "Paperback1966");
    return $db;
  }

  // GET ALL USERS
  public function getUsers() {

    // CONNECT DB
    $db = $this->getDb();

    // GET ALL USERS IN DB
    $request = $db->query("SELECT * FROM users");

    // ARRAY WITH ALL DB STOCKED IN VAR $DATA
    $data = $request->fetchAll(PDO::FETCH_ASSOC);

    // FOREACH MAKE OBJECTS WITH DATABASE LINES
    foreach ($data as $key => $value) {
      $data[$key] = new User($value);
    }
    //RETURN RESULT $DATA = AN ARRAY WITH ALL OBJECTS "BOOK"
    return $data;
  }


}

 ?>
