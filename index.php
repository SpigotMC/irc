<?php
    require_once("lib/Markdown_Parser.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SpigotMC IRC</title>
        <link href="style.css" media="all" rel="stylesheet" type="text/css" />
        <link href="markdown.css" media="all" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <article>
            <?php echo Markdown(file_get_contents("index.md")); ?>
        </article>
    </body>
</html>