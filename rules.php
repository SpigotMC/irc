<?php
	require("lib/Parsedown.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SpigotMC IRC Rules</title>
        <style>
            body { text-align: center; padding: 90px; }
            h1 { font-size: 50px; }
            body { font: 20px Helvetica, sans-serif; color: #333; }
            article { display: block; text-align: left; width: 750px; margin: 0 auto; }
            a { color: #dc8100; text-decoration: none; }
            a:hover { color: #333; text-decoration: none; }
        </style>
    </head>

    <body>
        <article>
	       <?php echo Parsedown::instance()->parse(file_get_contents("rules.md")); ?>
        </article>
    </body>
</html>