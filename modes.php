<?php
	require("lib/Parsedown.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SpigotMC IRC Modes and Extbans</title>
        <style>
            body { text-align: center; padding: 90px; }
            h1 { font-size: 50px; }
            body { font: 20px Helvetica, sans-serif; color: #333; }
            article { display: block; text-align: left; width: 750px; margin: 0 auto; }
            a { color: #dc8100; text-decoration: none; }
            a:hover { color: #333; text-decoration: none; }
        </style>
        <link href="markdown.css" media="all" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <article>
            <p style="margin-bottom: 35px;">
                <a href="index.html">Home</a> |
                <a href="/iris/">Webchat</a> | 
                <a href="rules.php">Rules</a> | 
                <a href="modes.php">Modes and Extbans</a> | 
                <a href="services.php">Services</a>
            </p>
            <?php echo Parsedown::instance()->parse(file_get_contents("modes.md")); ?>
        </article>
    </body>
</html>