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
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><label for="email">E-Mail:</label></td>
                    <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><label for="phone_number">Phone Number:</label></td>
                    <td><?php echo htmlspecialchars($phone_number, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><label for="athlete_or_volunteer">Athlete or Volunteer?:</label></td>
                    <td><?php echo htmlspecialchars($athlete_or_volunteer, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td rowspan="2"><label for="events">Choose Your Event:</label></td>
                    <td>--Saturday Events--<br>
                        <?php echo htmlspecialchars($events01, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td>--Sunday Events--<br>
                        <?php echo htmlspecialchars($events02, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><label for="emergency_contact_name">Emergency Contact Name:</label></td>
                    <td><?php echo htmlspecialchars($emergency_contact_name, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><label for="emergency_phone_number">Emergency Contact Number:</label></td>
                    <td><?php echo htmlspecialchars($emergency_phone_number, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><label for="genderid">How Do You Identify Yourself?:</label></td>
                    <td><?php echo htmlspecialchars($genderid, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><label for="shirtsize">Choose Your Shirt Size:</label></td>
                    <td><?php echo htmlspecialchars($shirtsize, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                
            </table>
        </main>

    <?php include '../includes/weather.inc.html.php'; ?>
    <?php include '../includes/footer2.inc.html.php'; ?>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="../scripts/burger.js"></script>
<script src="../scripts/gallery.js"></script>  
<script src="../scripts/weather.js"></script>
<script src="../scripts/facebook.js"></script>

</div>
</body>
</html>