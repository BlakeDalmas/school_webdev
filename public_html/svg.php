<!DOCTYPE html>

<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>SVG</title>
    </head>

    <body>
        <h1>Sample document with SVG image.</h1>
        <p>Below is an image.</p>

        <svg width="100" height="100">
            <?
                for ($x = 0; $x <= 50; $x++) {
                    printf($x);
            ?>
                <circle cx="<?php echo htmlspecialchars($x); ?>" cy="50" r="40" stroke="black" stroke-width="4" fill="blue"/>
            <?
                }
            ?>
        </svg>

        <p>...and that's it.</p>
    </body>
</html>