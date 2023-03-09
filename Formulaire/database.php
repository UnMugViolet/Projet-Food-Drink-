<?php

$servername = 'localhost:8889';
$username = 'root';
$password = 'root';

$database = 'TEST_FOOD';
$dbh = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
