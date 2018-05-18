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

<title>Site Title</title>

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/generic.css" rel="stylesheet" type="text/css">
<link href="css/grid.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="main">
    <?php include 'includes/nav.inc.html.php'; ?>
    
    <header>
        <h1>Heading 1</h1>
    </header>
    
    <main>
        <h2>Heading 2</h2>
        <p>
        Paragraph.
        </p>
        <p>
        Paragraph.
        </p>
        
        <section>
            <?php include 'includes/tables.inc.html.php'; ?>
        </section>
        
        <br>
        <hr>
        <br>
        <h2>Heading 2</h2>
        <p>
        Paragraph.
        </p>
        <section>
            <?php include 'includes/gallery.inc.html.php'; ?>
        </section>
            
        <br>
        <hr>
        <br>
        <section>
            <?php include 'includes/form.inc.html.php'; ?>
        </section>
        
        <br>
        <hr>
        <br>
        <section>
        <?php include 'includes/form2.inc.html.php'; ?>
        </section>
        
    </main>
        
    <footer>

        <p>Social Media Links</p>
        
    </footer>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="scripts/burger.js"></script>
<script src="scripts/gallery.js"></script>    

</div>
</body>
</html>