<?php

class User {

  protected $idUser;
  protected $name;
  protected $userCode;


  //SETTERS
  public function setIdUser($idUser){
    $this->idUser = $idUser;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setUserCode($userCode){
    $this->userCode = $userCode;
  }


  //GETTERS
  public function getIdUser() {
    return $this->idUser;
  }

  public function getName() {
    return $this->name;
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
