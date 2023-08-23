<?php

class User {
  private $connection;

  public function __construct($connection) {
    $this->connection = $connection;
  }

  // pending functions with the database
  // 1. createUser
  public function createUser($username, $password) {

  }

  // 2. getUser
  public function getUser($username, $password) {

  }

}

?>