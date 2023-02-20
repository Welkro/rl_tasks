<?php $title = "Exercise 1"; 
include "header.php";?>

<div class="main">
    <div class="txtblock">
    <hr><h1> 3.1 Write a simple PHP script to print your information (Name and your groupID).</h1>

    <?php
    echo "Roy Liu <br>";
    echo "BBCAP22";
    ?>

<hr><h1> 3.2 Write PHP code to display the following message.</h1>

    <?php
    echo "Hello World! My name is \"Roy\"";
    ?>
    <script>
    //window.alert
    //window.alert("This will trigger an alert box");
    //window.alert(5+8);
    //document.write
    document.write("Hello this is interesting");
    </script>
<hr><h1> 3.3 Write the PHP code in to display the current date. </h1>

    <?php
    echo date('d.M.Y');
    ?>
<br>
    <script>
        document.write("Hello, this is JavaScript")
    </script>

    <noscript>
        Please enable JavaScript to view this content
    </noscript>
    <input type="button" onclick="hello()" value="Click Me!">

<hr><h1> 3.4 Variables in PHP </h1>

    <?php
    $title1 = "PHP is interesting";
    echo "<h1>" . $title1 . "</h1>";
    ?>

<hr><h1> 3.5 Table & Variables </h1>
<button onclick="add()"> Calculate 5+5 </button>
<p id="place1" style="color:red; background-color:white;"> </p>
<span id="place2" style="color:purple; background-color:violet;"> </span>
<script>
document.getElementById("place1").innerHTML="This will go to place1"
document.getElementById("place2").innerHTML="This will go to span"
</script>
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

<hr><h1> 4. Screenshot of the development environment </h1>
<img src="proof.jpg" alt="image">

<hr><h1> Changing background-color </h1>
<form>
<input type="color" name="background" onchange="setColor('background', this.value)">
</form>

    </div>
</div>
<?php include "footer.php"; ?>
