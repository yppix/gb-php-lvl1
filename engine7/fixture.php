<?php
include "model/User.php";
include "model/UserProvider.php";


$pdo = include "db.php";

$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  description VARCHAR(250),
  isDone TINYINT(1) NOT NULL,
  userId INTEGER NOT NULL
)');


$user = new User('admin');
$user->setName('Ember Song');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');