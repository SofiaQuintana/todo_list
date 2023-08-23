<?php

class TaskList {
    private $connection;
    public function __construct($connection) {
        $this->connection = $connection;
    }
    
    // pending functions with the database
    // 1. createTaskList
    public function createTaskList($title, $username) {

    }
    // 2. getAllTaskListsByUser
    public function getAllTaskListsByUser($username) {

    }
    // 3. getTaskListById
    public function getTaskListById($id) {

    }
    // 4. removeTaskListById
    public function removeTaskListById($id) {

    }
}
?>