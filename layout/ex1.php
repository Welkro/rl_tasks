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

<h1> 3.4 Variables in PHP </h1>

    <?php
    $title1 = "PHP is interesting";
    echo "<h1>" . $title1 . "</h1>";
    ?>

<h1> 3.5 Table & Variables </h1>

    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    echo "
    <table>
    <tr>
    <th> S.N </th><th> Name </th><th> Grade </th>
    </tr>
    <td> 1 </td><td> Pekka </td><td> $g1 </td>
    </tr>
    <td> 2 </td><td> Johanna </td><td> $g2 </td>
    </tr>
    <td> 3 </td><td> John </td><td> $g3 </td>
    </tr>
    </table>
    ";
    ?>

<h1> 4. Screenshot of the development environment </h1>
<img src="proof.jpg" alt="image">


<?php include "footer.php"; ?>
