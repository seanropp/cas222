<!-- 
File Name: success.html.php
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
    
<body class="contact">
<div class="main">
    <?php include '../includes/nav2.inc.html.php'; ?>
    <?php include '../includes/header2.inc.html.php'; ?>
        
        <main>
            <h2>Your Message has been sent!</h2>
            <p>You can expect a reply as soon as we are able to read your message.</p>
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
                    <td><label for="party">Are you an Athlete, Volunteer, or Other Interested Party:</label></td>
                    <td><?php echo htmlspecialchars($party, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><label for="comment">Questions or Comments:</label></td>
                    <td><?php echo htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); ?></td>
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