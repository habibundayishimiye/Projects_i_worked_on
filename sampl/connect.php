<?php
$firstneme = $_POST['firstname'];
$lastneme = $_POST['lastname'];
$age = $_POST['age'];
$gender = $_POST['gender'];

//Database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into restration(firstname, lastname,age,gender) values(?,?,?,?)");
    $stsm->bind_param("sssi",$firstname,$lastname,$age,$gender);
    $stsm->execute();
    echo "registration successfully...";
    $stsm->close();
    $stsm->close();
}
?>