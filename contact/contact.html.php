<!-- 
File Name: home.html.php
Date: 05/02/18
Programmer: Sean Ropp
-->
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="author" content="Sean Ropp, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Ace in the Hole</title>

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
         <h2>Contact Us</h2>
        <section>
            <p>Got a question that our FAQ doesn't answer, or maybe a concern?  Please fill out the form below to let us know what is on your mind!</p>
            <?php include '../includes/con_form.inc.html.php'; ?>
        </section>


        
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
