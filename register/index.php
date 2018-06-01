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
    $phone_number = $_POST['phone_number'];
    $athlete_or_volunteer = $_POST['athlete_or_volunteer'];
    $events = $_POST['events'];
    $emergency_contact_name = $_POST['emergency_contact_name'];
    $emergency_phone_number = $_POST['emergency_phone_number'];
    
 try {
        $sql = 'INSERT INTO register_form SET
        name = :name,
        email = :email,
        phone_number = :phone_number,
        athlete_or_volunteer = :athlete_or_volunteer,
        events = :events,
        emergency_contact_name = :emergency_contact_name,
        emergency_phone_number = :emergency_phone_number';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':email', $email);
        $s->bindValue(':phone_number', $phone_number);
        $s->bindValue(':athlete_or_volunteer', $athlete_or_volunteer);
        $s->bindValue(':events', $events);
        $s->bindValue(':emergency_contact_name', $emergency_contact_name);
        $s->bindValue(':emergency_phone_number', $emergency_phone_number);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error fetching content: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
      }
include 'success.html.php';
  } else {
      include 'register.html.php';
  }

?>