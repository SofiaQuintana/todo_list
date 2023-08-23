<?php

class User {
  private $connection;

  public function __construct($connection) {
    $this->connection = $connection;
  }

  // pending functions with the database
  // 1. createUser
  public function createUser($username, $password) {
    // Hash the password using password_hash()
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute a query to insert the new user
    $query = "INSERT INTO User (username, password) VALUES (?, ?)";
    $statement = $this->connection->prepare($query);
    $result = $statement->execute([$username, $hashedPassword]);

    return $result;
  }

  // 2. getUser
  public function authenticate($username, $password) {
    $query = "SELECT password FROM User WHERE username = ?";
    $statement = $this->connection->prepare($query);
    $statement->execute([$username]);

    $userData = $statement->fetch(PDO::FETCH_ASSOC);

    if ($userData) {
    // Verify the password
      if (password_verify($password, $userData['password'])) {
        return true; // Authentication successful
      }
    }
    return false; // Authentication failed
  }

}
