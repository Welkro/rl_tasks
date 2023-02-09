<?php include "header.php"; ?>
<div class = "txtblock">

<hr><h3> Exercise 3. In-class Task Variable & Operators (variable.php)</h3>

<h2>
    1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using 
        tag: Hello …., You are welcome to my site
</h2>


<form action="action.php" method="post">
    <div class="row">
        <div class="col">
            <input type="txt" name="fname" required placeholder="First Name" class="form-control"> 
        </div>
        
        <div class="col">
            <input type="txt" name="lname" required placeholder="Last Name" class="form-control"> 
        </div>
    </div>
        <div class="row">
            <div class="col">
            Date: <input type="date" name="bdate" required> <br>
            </div> 
            <div class="col">
            Select favourite colour: <input type="color" name="color" required> <br>
            <input type="submit" value="Submit">    
            </div> 
        </div>
</form>

<hr><h2> 2. Bootstrap style table </h2>

<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Matti</td>
      <td>Meikäläinen</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Maija</td>
      <td>Mehiläinen</td>
      <td>4</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Smith</td>
      <td>5</td>
    </tr>
  </tbody>
</table>

<hr><h2> 4. Write a PHP script with two string variables </h2>

<?php
$name = "Roy";
$country = "Finland";
echo $name . " " . $country; 
echo "<br> The length of " . $country . " is " . strlen($country);
?>
<h2>

<hr><h2> 5. Write a script to add up the numbers: 298, 234, 46 </h2>
<?php
$a = 298;
$b = 234;
$c = 46;
echo $a + $b + $c;
?>

<hr><h2> 6. Write a PHP script to detect the browser being used to view your pages </h2>

<?php
$host = $_SERVER['HTTP_USER_AGENT'];
echo $host;
?>

<hr><h2> 7. Write a PHP script in the footer section of your universal footer </h2>


</div>
<?php include "footer.php"; ?>