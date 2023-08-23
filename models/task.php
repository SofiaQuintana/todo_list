<?php 
 class Task {
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    // pending functions with the database
    // 1. createTask
    public function createTask($title, $description, $due_date) {

    }
    // 2. updateTaskStatus
    public function updateTaskStatus($id, $is_completed) {

    }
    // 3. deleteTask
    public function deleteTask($id) {

    }
    // 4. getAllTasksByListId
    public function getAllTasksByListId($list_id) {
        
    }
    
 }
?>