<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = "mysql:host=localhost;port=3306;dbname=my_php;charset=utf8";
$username = 'root';
$password = '1234'; // password

// Create a new PDO instance
$pdo = new PDO($dsn, $username, $password);

// Prepare the SQL query
$stmt = $pdo->prepare('SELECT * FROM notes');

// Execute the query
$stmt->execute();

// Fetch all records as an associative array
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Loop through and display the results
foreach ($posts as $post)
{
    echo "<li>" . $post['id'] . "</li>";
    echo "<li>" . $post['body'] . "</li>";  // Added concatenation and fixed syntax
}
