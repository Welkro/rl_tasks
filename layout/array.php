<?php include "header.php";?>
<div class = "txtblock">
<h1> Calculator </h1>
<form action="" method="get">
    <input type="number" name="input1" placeholder="Enter your first number" required>
    <input type="number" name="input2" placeholder="Enter your second number" required>
<select name="operator">
    <option value="add"> Add </option>
    <option value="sub"> Substract </option>
    <option value="mul"> Multiply </option>
    <option value="div"> Divide </option>
</select>
    <input type="submit" name="calc" value="Calculate"> 
</form>


<?php
    if (isset($_GET["calc"])){
        $input1 = $_GET["input1"];
        $input2 = $_GET["input2"];
        $operator = $_GET["operator"];
        switch($operator){
            case "add":
                $result = $input1 + $input2;
                break;
            case "sub":
                $result = $input1 - $input2;
                break;
            case "mul":
                $result = $input1 * $input2;
                break;
            case "div":
                $result = $input1 / $input2;
                break;

            default:
                $result = "Error: You have not selected the correct operator";
         }
    }

    if (isset($result)){
        echo "<h1> Result: $result </h1>";
}   
?>

<h1> 1. Write a php script to display courses as list. Use < li > </h1> 

<?php
    $courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
    $num = count($courses);

    for ($i = 0; $i <5; $i++){
        echo "<li>$courses[$i]";
    }
?>

<h1> 2. Delete an element from the array below: <br>
    $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project"); </h1>
 
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
$num = count($courses1);
unset($courses1[0]);

for ($i = 0; $i < 5; $i++){
    echo "$courses1[$i] ";
}
?>

<h1> 3. Sort the following array<br> 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project"); <br>
a) ascending order sort by value <br>
b) ascending order sort by Key <br>
c) descending order sort by Value <br>
d) descending order sort by Key <br>
 </h1>

</div>
<?php include "footer.php"; ?>