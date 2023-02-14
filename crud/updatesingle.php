<?php 
$title = "Update your info";
include '../layout/header.php';
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($connection, "Select * from pupilinfo where id='$a' ");
$row = mysqli_fetch_array($result);
?>
<div class = "txtblock">
<h1> Update your information below </h1>
    <form name="update" method="post" action="">
        <input type="text" name="fname" placeholder="First Name" required value="<?php echo $row['fname'];?>"> <br> <br>
        <input type="text" name="lname" placeholder="Last Name" required value="<?php echo $row['lname'];?>"> <br> <br>
        <input type="text" name="city" placeholder="City" required value="<?php echo $row['city'];?>"> <br> <br>
            <select name="groupid" value="<?php echo $row['groupid'];?>"> 
                <option value="BBCAP22"> BBCAP22 </option>
                <option value="BBCAP21"> BBCAP21 </option>
                <option value="Others"> Others </option>
            </select> <br> <br>
        <input type="submit" name="update" value="Update your info"> 
        <input type="submit" name="delete" value="Delete your info"> 
</form>

<?php
    if(isset($_POST['update'])){
        $fname = $_POST ['fname'];
        $lname = $_POST ['lname'];
        $city = $_POST ['city'];
        $groupid = $_POST ['groupid'];
        $query = mysqli_query($connection, "UPDATE pupilinfo set fname='$fname', lname='$lname', city='$city', groupid='$groupid' where id='$a' ");
            if($query){
             echo "<h3> Your information is updated successfully </h3>";
            }
            else { echo "Record not modified";
            }

    }


?>

</div>
<?php 
include '../layout/footer.php';
?>