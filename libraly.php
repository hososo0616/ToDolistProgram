<?php

$dsn = 'mysqli:dbname=tododb;host=localhost';
$user = 'user';
$password = 'user1234';

function dbconnection()
{
  $db = new PDO($dsn, $user, $password);
  try {
    $db = new PDO($dsn, $user, $password);
    return $db;
  } catch (PDOException $e) {
    print('Error:' . $e->getMessage());
    die();
  }
}
