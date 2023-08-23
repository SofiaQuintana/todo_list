<?php

class DatabaseConnection {
  private $host = "localhost";
  private $database = "todo_list";
  private $username = "todo_user";
  private $password = "@Password?123";
  private $connection;
  private static $instance = null;

  
  public function __construct() {
    // creates connection to the database
    $this->createConnection();
  }

  private function createConnection() {
    try {
        $this->connection = new PDO(
            "mysql:host=$this->host;dbname=$this->database", 
            $this->username, 
            $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception) {
        die("Connection failed: " . $exception->getMessage());
    }
  }

  public static function getInstance() {
    if (self::$instance === null) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  public function getConnection() {
    return $this->connection;
  }
}

?>
  