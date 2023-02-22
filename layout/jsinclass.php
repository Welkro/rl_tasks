<?php
$title = "JavaScript Events and form validations";
include "header.php"
?>

<div class = "txtblock">
    
<h1> A simple button to display  date </h1>
    <button onclick="this.innerHTML=Date()"> Click to know date </button>

<h1> Make a button and a placeholder as paragraph for the date </h1>
    <button onclick="getElementById('p1').innerHTML=Date()"> Click to know date </button>
        <p id="p1"> This is a placeholder text for the date </p>

<h1> Change the background colour </h1>
    <form>
        <input type="color" id="b1" onchange="changeColor()">
    </form>

<h1> Change the font colour </h1>
    <form>
        <input type="color" id="f1" onchange="changeFcolor()">
    </form>

<h1> On mouse over & on mouse out </h1>

<span onmouseover="this.style.color='blue';
                    this.style.backgroundColor='yellow';
                    this.style.fontSize='10em';" 
                    onmouseout="this.style.color='green';
                    this.style.backgroundColor='red';
                    this.style.fontSize='2em';"> Love you 
</span>

</div>
<?php 
include "footer.php" 
?>