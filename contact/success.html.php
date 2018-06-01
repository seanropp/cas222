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
            <p>
                Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
                Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
                Party: <?php echo htmlspecialchars($party, ENT_QUOTES, 'UTF-8'); ?><br>
                Comment: <?php echo htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); ?><br>
            </p>
        </main>

    <?php include '../includes/footer2.inc.html.php'; ?>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/burger.js"></script>
<script src="../scripts/gallery.js"></script>    

</div>
</body>
</html>