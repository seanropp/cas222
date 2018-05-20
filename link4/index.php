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
    $number = $_POST['number'];
    $choice = $_POST['choice'];
    $events = $_POST['events'];
    $name2 = $_POST['name2'];
    $number2 = $_POST['number2'];
    
 try {
        $sql = 'INSERT INTO register_form SET
        name = :name,
        email = :email,
        number = :number,
        choice = :choice,
        events = :events,
        name2 = :name2,
        number2 = :number2';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':email', $email);
        $s->bindValue(':number', $number);
        $s->bindValue(':choice', $choice);
        $s->bindValue(':events', $events);
        $s->bindValue(':name2', $name2);
        $s->bindValue(':number2', $number2);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error fetching content: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
      }
include 'success.html.php';
  } else {
      include 'link4.html.php';
  }

?>