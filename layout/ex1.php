<?php include "header.php"; ?>

<h1> 3.1 Write a simple PHP script to print your information (Name and your groupID).</h1>

    <?php
    echo "Roy Liu <br>";
    echo "BBCAP22";
    ?>

<h1> 3.2 Write PHP code to display the following message.</h1>

    <?php
    echo "Hello World! My name is \"Roy\"";
    ?>

<h1> 3.3 Write the PHP code in to display the current date. </h1>

    <?php
    echo date('d.M.Y');
    ?>

<h1> 3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document. </h1>

    <?php
    $title1 = "PHP is interesting";
    echo "<h1>" . $title1 . "</h1>";
    ?>


<?php include "footer.php"; ?>
