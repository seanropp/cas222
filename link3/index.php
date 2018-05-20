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

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $party = $_POST['party'];
    $comment = $_POST['comment'];
    
 try {
        $sql = 'INSERT INTO contact_form SET
        name = :name,
        email = :email,
        party = :party,
        comment = :comment';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':email', $email);
        $s->bindValue(':party', $party);
        $s->bindValue(':comment', $comment);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error fetching content: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
      }
include 'success.html.php';
  } else {
      include 'link3.html.php';
  }

?>