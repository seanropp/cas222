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
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/generic.css" rel="stylesheet" type="text/css">
<link href="css/grid.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="home">
<div class="main">
    <?php include 'includes/nav1.inc.html.php'; ?>
    <?php include 'includes/header1.inc.html.php'; ?>
    
    
    <main>
        <img src="images/logo02.png" class="img2">
        <section>
            <p>
            Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.
            </p>
        </section>
<br>
        <section>
            <h3>ABOUT THE EVENTS</h3>
            <p>
            <img src="<?php echo 'images/event14.jpg'; ?>" class="img3">
            The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.
            </p>
            <p>
            There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
            </p>
            <br>
            <?php include 'includes/tables.inc.html.php'; ?>
        </section>
        <br>
        <section>
            <h3>Costs Includes</h3>
            <ul>
                <li>Access to the weekend’s live entertainment &amp; Fitness Expo</li>
                <li>Commemorative Finisher medal</li>
                <li>Accurate Chip Timing for competitive races</li>
                <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
                <li>Post-event party &amp; entertainment</li>
            </ul>
            <p>
            <strong>NOTE:</strong> Tech shirts guaranteed to pre-registered participants only.
            </p>    
        </section>
        <br>
        <section>
            <h3>PACKET PICK UP</h3>
            <p>
            All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.
            </p>
        </section>
        <br>
        <section>
            <h3>What to Bring</h3>
            <p>
            <img src="images/event21.jpg" class="img3">
            Watch the weather closely.  The show goes on no matter what the weather is doing.
            </p>
            <p>
            You must wear your chip timing piece during the entire event.  You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.    
            </p>
            <dl>
            <dt>Swim</dt>
                <dl>Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.</dl>
            <br>
            <dt>Bike</dt>
                <dl>A biking helmet is mandatory.  You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet.  The bigger sticker will wrap around your bike frame.  Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</dl>
            <br>
            <dt>Run</dt>
                <dl>You must finish the race with your bib number on the front of you.  Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it.  Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.  Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.</dl>
            </dl>
            <br>
            <p>
            Remember to bring a change of clothing so you can enjoy the post-event festivities.
            </p>
        </section>
        
        
    </main>
        
    <?php include 'includes/footer1.inc.html.php'; ?>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="scripts/burger.js"></script>
<script src="scripts/gallery.js"></script>    

</div>
</body>
</html>
