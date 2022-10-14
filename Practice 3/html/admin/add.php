<?php
$author = $_GET['author'];
$name = $_GET['name'];
$mysqli = new mysqli("mysql", "user", "sayhi", "appDB2");
$result = $mysqli->query("INSERT INTO books VALUE (NULL, '$author', '$name')");
header("Location: http://localhost:8080/index.php");
exit();
