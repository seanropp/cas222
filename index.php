<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=seanropp_cas222', 'seanropp_ace', 'mypassword4u');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}

include 'home/home.html.php';

?>