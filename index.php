<?php
/* This part of the PHP code Declares an array with the Random Quotes */
$phrases = [
    'Imagination is more important than knowledge. - <strong> Albert Einstein </strong>',
    'Be alone, that is the secret of invention; be alone, that is when ideas are born. -<strong> Nikola Tesla</strong>',
    'All truths are easy to understand once they are discovered; the point is to discover them. - <strong> Galielo Galilei</strong>',
    'I have not failed. I\'ve just found 10,000 ways that won\'t work. - <strong> Thomas Edison</strong>',
];
?>


<!DOCTYPE html>
<html>
<!-- This Section of Code Generates the Display -->
<head>
    <title>OSCAR RANGEL P1</title>
    <style>
        .center {
            text-align: center;
        }
        .justify {
            text-align: justify;
        }
    </style>
</head>
<body>
<header>
    <div class="center">
        <h1 style="font-family:Helvetica;"><em>Oscar Rangel</em></h1>
    </div>
</header>
<div class="center">
    <img src='images/Oscar_Rangel.jpg' alt='Oscar Rangel Photograph' width="250">
    <h2 style="font-family: Tahoma"><em>About Me</em></h2>
</div>

<div class="justify">
    <p style="font-family:arial;"> I am Senior Controls Engineer with the <strong>General Electric Company</strong>.
        I have a <strong> BSEE</strong> from <em>Tulane University</em> and a <strong>PE</strong> License from <em>the State of Louisiana</em>.
        My job involves replacing Gas Turbines legacy electronic components
        with the latest generation of controls and computer software.
        With the increasing industrial demand for web based applications,
        this course is a good starting point for learning about dynamic,
        database-driven web applications. In addition, it will be a good opportunity
        to learn about <strong>PHP</strong> and <strong>Laravel</strong>.</p>
</div>
<div class="center">
    <h2 style="font-family: Tahoma"> <em>Random Quote</em></h2>
    <p style="font-family:arial;">
        <!-- The following line generates the random quotes -->
        <?=$phrases[mt_rand(0, count($phrases)-1)]; ?>
    </p>
</div>
</body>
</html>


