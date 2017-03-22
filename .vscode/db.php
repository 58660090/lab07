<?php
$host = "localhost";
$user = "it58660090";
$password = "it58660090";
$dbname = "it58660090";
$conn = new mysqli($host, $user, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) die($conn->connect_error);
?>