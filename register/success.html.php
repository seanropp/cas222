<!-- 
File Name: link4.html.php
Date: 05/02/18
Programmer: Sean Ropp
-->
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="author" content="Sean Ropp, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Site Title</title>

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<link href="../css/reset.css" rel="stylesheet" type="text/css">
<link href="../css/generic.css" rel="stylesheet" type="text/css">
<link href="../css/grid.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
    
<body class="register">
<div class="main">
    <?php include '../includes/nav2.inc.html.php'; ?>
    <?php include '../includes/header2.inc.html.php'; ?>
    
        <main>
            <h2>You have successfully registered!</h2>
            <p>Mark the date and time, and we'll see you there!</p>
            <p>
                Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
                E-mail: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
                Phone Number: <?php echo htmlspecialchars($phone_number, ENT_QUOTES, 'UTF-8'); ?><br>
                Athlete or Volunteer?: <?php echo htmlspecialchars($athlete_or_volunteer, ENT_QUOTES, 'UTF-8'); ?><br>
                Choose Your Event: <?php echo htmlspecialchars($events, ENT_QUOTES, 'UTF-8'); ?><br>
                Emergency Contact Name: <?php echo htmlspecialchars($emergency_contact_name, ENT_QUOTES, 'UTF-8'); ?><br>
                Emergency Contact Number: <?php echo htmlspecialchars($emergency_phone_number, ENT_QUOTES, 'UTF-8'); ?><br>
            </p>
        </main>

        <?php include '../includes/footer2.inc.html.php'; ?>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/burger.js"></script>
<script src="../scripts/gallery.js"></script>   

</div>
</body>
</html>