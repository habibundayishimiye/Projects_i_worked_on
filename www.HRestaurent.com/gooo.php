<?php
if(isset($_POST['submit']))
{
$conn = mysqli_connect("localhost","root","","mygsg");
$id = $_POST(['a']);
$fname = $_POST(['fn']);
$lname = $_POST(['ln']);
$age = $_POST(['ag']);
$gender = $_POST(['ge']);
if($id = "" || $fn = "" || $ln = "" || $age = "" || $gender = "")
{
    head('location: mmm.php?msg=impossible');
    exit();
}
$insa = "INSERT INTO student_tb(a, fn, ln, ag, ge) VALUE('$id, $fname, $lname, $age, $gender')";
mysqli_query($conn,$insa);
head('locaion: mmm.php?msg=success&name=' . $fname . '');
exit();
}
?>