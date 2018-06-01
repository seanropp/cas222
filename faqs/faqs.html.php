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

<body class="faqs">
<div class="main">
    <?php include '../includes/nav2.inc.html.php'; ?>
    <?php include '../includes/header2.inc.html.php'; ?>
    
    
    <main>
        <h2>FAQs</h2>
        <section>
            <p>
            Here you will find answers to some frequently asked questions, our gallery of images.  If you have a question that isn't answered by this page, please reach out to us on the Contact page.
            </p>
        </section>
        <br>
        <hr>
        <br>
        <section>
            <h3>Questions &amp; Answers</h3>
            <p>Presented below are some frequently asked questions.  If you have a question that isn't answered below, please contact us with your question.</p>
            <br>
            <dt>What are the Rules?</dt>
                <dl>We currently adhere to the USAT Rules for Triathlon &amp; Duathlon.  Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</dl>
            <br>
            <dt>Can I use a personal music device while cycling?</dt>
                <dl>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</dl>
            <br>
            <dt>Can I use a personal music device while running?</dt>
                <dl>
                    <p>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
                    <p>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice…music or awards/points/rankings.</p>
                    <p>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don’t want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</p>
                    <p>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p>
                </dl>
            <br>
            <dt>Do I need to wear a wetsuit?</dt>
                <dl>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</dl>
            <br>
            <dt>Do I have to use a road or racing bike?</dt>
                <dl>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</dl>
         
        </section>
        <br>
        <hr>
        <br>
        <section>
            <h3>Image Gallery</h3>
            <p>Here are images from other events put on by Ace in the Hole.</p>
            <?php include '../includes/gallery.inc.html.php'; ?>
        </section>
        
    </main>
        
    <?php include '../includes/footer2.inc.html.php'; ?>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/burger.js"></script>
<script src="../scripts/gallery.js"></script>    

</div>
</body>
</html>
