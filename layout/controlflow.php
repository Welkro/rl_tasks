<?php include "header.php"; ?>
<div class = "txtblock">

<hr><h2> 1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays </h2>

<?php
$d = date("F");
echo date("F.");

if ($d == "Aug"){
    echo " It's August, so it's still holiday.";
} 
else {
    echo " It's not August, it's $d, so I don't have any holidays.";
}
?>

<hr><h2> 2. Assign colour red to a variable name $color and check to print one the following responses (if else statement) </h2>

<?php
$color = "red";

if ($color == "red"){
    echo " The colour is red.";
}
else {
    echo " The colour is not red.";
}
?>

<hr><h2> 3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score </h2>

<?php
$grade = 70;

if ($grade >= 80){
    echo "Excellent";
} elseif ($grade >= 70 && $grade < 80) {
    echo "Great";
} elseif ($grade >= 60 && $grade < 70) {
    echo "Good";
} elseif ($grade >= 50 && $grade < 60) {
    echo "Pass";
} elseif ($grade < 50) {
    echo "Fail";
}
?>

<hr><h2> 4. Write a program to get inputs (age and name) from the user and based on their age <h2>
    
<form action="vote.php" method="post">
    <input type="txt" name="name" required placeholder="Name" class="form-control" required>
    <input type="number" name="age" required placeholder="Age" class="form-control" required>
    <input type="submit" value="Submit"> 
</form>



<hr><h2> 5.Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Google Chrome… </h2>

<?php
$host = $_SERVER['HTTP_USER_AGENT'];
echo $host;

if (strpos($host, 'Edg') == true){
  echo ' You are using Microsoft Edge.';
} elseif (strpos($host, 'Firefox') == true){
  echo ' You are using Mozilla Firefox.';
} elseif (strpos($host, 'OPR') == true) {
  echo ' You are using Opera.';
} elseif (strpos($host, 'Chrome') == true) {
  echo ' You are using Google Chrome.';
} 
else {
    echo 'We could not detect your browser.';
}
?>



</div>
<?php include "footer.php"; ?>