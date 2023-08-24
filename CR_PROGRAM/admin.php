<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "cest_paul_db"); 
include_once 'header.php' 
?>

<div class="home_contents text-white text-center">



<?php
$current_user = $_SESSION['current_admin'];
$sql = "SELECT * FROM admin_details WHERE admin_email = '$current_user'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
{
    msgSuccess($row['admin_username'], "You have Logged in successfully!");
}
?> 

<br>



</div>

<?php include_once 'footer.php' ?>