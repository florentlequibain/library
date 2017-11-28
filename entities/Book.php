<?php

class Book {

  protected $idBook;
  protected $title;
  protected $author;
  protected $releaseDate;
  protected $type;
  protected $summary;
  protected $status;
  protected $userCode;


  //SETTERS
  public function setIdBook($idBook){
    $this->idBook = $idBook;
  }

  public function setTitle($title){
    $this->title = $title;
  }

  public function setAuthor($author){
    $this->author = $author;
  }

  public function setReleaseDate($releaseDate){
    $this->releaseDate = $releaseDate;
  }

  public function setType($type){
    $this->type = $type;
  }

  public function setSummary($summary){
    $this->summary = $summary;
  }

  public function setStatus($status){
    $this->status = $status;
  }

  public function setUserCode($userCode){
    $this->userCode = $userCode;
  }


  //GETTERS
  public function getIdBook() {
    return $this->idBook;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getAuthor() {
    return $this->author;
  }

  public function getReleaseDate() {
    return $this->releaseDate;
  }

  public function getType() {
    return $this->type;
  }

  public function getSummary() {
    return $this->summary;
  }

  public function getStatus() {
    return $this->status;
  }

  public function getUserCode() {
    return $this->userCode;
  }

  // CONSTRUCT
  public function __construct(array $data) {
    foreach ($data as $key => $value) {
      $method = "set" . ucfirst($key);
      if(method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }
}


 ?>
