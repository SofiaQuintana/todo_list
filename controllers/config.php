<?php
require_once '../models/db_connection.php';

$db_instance = DatabaseConnection::getInstance();
$db_connection = $db_instance->getConnection();

$configData = [
    'appName' => 'My ToDo App',
    // Other configuration options
];

header('Content-Type: application/json');
echo json_encode($configData);

?>