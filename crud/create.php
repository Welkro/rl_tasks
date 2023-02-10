<?php $title = "A  simple CRUD app";
include '../layout/header.php';
?>

<div class = "txtblock">
    <form method="post" action="">
        <input type="text" name="fname" placeholder="First Name" required>
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="text" name="city" placeholder="city" required>
            <select name="groupid">
                <option value="BBCAP22"> BBCAP22 </option>
                <option value="BBCAP21"> BBCAP21 </option>
                <option value="Others"> Others </option>
            </select>
        <input type="submit" name="submit" value="Submit"> 
    </form>


<?php
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    include "db.php";
    $sql = "insert into studentinfo (fname, lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";

    if ($connection ->query($sql) === TRUE){
        echo "Your information is added successfully";
    }
    else{
        echo "Error:" .$connection->error;
    }
}
?>

</div>
<?php include '../layout/footer.php';?>