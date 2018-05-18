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
  include '../includes/error.html.php';
  exit();
}
/*
try
{
  $sql = 'SELECT * FROM content';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching page: ' . $e->getMessage();
  include 'includes/error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $content[] = array(
      'title' => $row['title'],
      'description' => $row['description'],
      'image' => $row['image'],
  );
}
*/
include 'contact.html.php';

?>