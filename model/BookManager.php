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
    $request = $db->prepare("SELECT b.* , u.*
                             FROM books b
                             LEFT JOIN users u
                             ON b.userCode = u.userCode
                             WHERE idBook= ?");
    $request->execute([$id]);

    // ARRAY WITH ONE DB LINE STOCKED IN VAR $DATA
    $data = $request->fetch(PDO::FETCH_ASSOC);
    return $data;

  }


 // UPDATE A BOOK
 public function updateBook(){

    $request = $db->prepare("UPDATE books SET title = :newTitle,
                                              author = :newAuthor,
                                              releaseDate = :newReleaseDate,
                                              type = :newType,
                                              sumamry = :newSummary,
                                              status = :newStatus,
                                              userCode = :newUserCode ");

    $request->execute([	'newTitle' => $_POST["newTitle"],
                        'newAuthor' => $_POST["newAuthor"],
                        'newReleaseDate' => $_POST["newReleaseDate"],
                        'newType' => $_POST["newType"],
                        'newSummary' => $_POST["newSummary"],
                        'newStatus' => $_POST["newStatus"],
                        'newUserCode' => $_POST["newUserCode"], ]);

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


//  // GET USER WITH BORROWED BOOK
// public function getUserBorrowBook($idBook) {
//     $db = $this->getDb();
//
//     $request = $db->prepare("SELECT u.name name
//                              FROM users u
//                              INNER JOIN books b
//                              ON b.userCode = u.userCode
//                              WHERE b.idBook = ?");
//     $request->execute([$idBook]);
//     $data = $request->fetch(PDO::FETCH_ASSOC);
//     $book = new Book($data);
//     return $data;
// }


// UPDATE USER CODE FROM BOOK
public function updateBookUserCode(){

   $request = $db->prepare("UPDATE books SET userCode = :newUserCode ");

   $request->execute(['newUserCode' => $_POST["updateUserCode"], ]);

   $data = $request->fetch(PDO::FETCH_ASSOC);
   $book = new Book($data);
   return $data;
 }


}

 ?>
