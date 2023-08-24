<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "cest_paul_db");


$admin_username = $_POST['admin_username'];
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];

if($admin_username == "" || $admin_email == "" || $admin_password == "")
{
    header('location: ../index.php?msg=empty_fields'); 
    exit();
}

$sql = "SELECT * FROM admin_details WHERE admin_username = '$admin_username' AND admin_email = '$admin_email' AND admin_password = '$admin_password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    while( $row = mysqli_fetch_assoc($result))
    {
        $_SESSION['current_admin'] = $row['admin_email'];
        header("location: ../admin.php?msg=welcome");
    }
}
else{
    header('location: ../index.php?msg=incorrect_logins'); 
    exit();
} 
