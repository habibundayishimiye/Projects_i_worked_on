<?php

if(isset($_POST['submit']))
{
    
    $conn = mysqli_connect("localhost", "root", "", "abanyeshuri_db");
    $given_name = $_POST['s_names'];
    $given_age = $_POST['s_age'];
    $ispassed = $_POST['ispassed'];

    if($given_name == "" || $given_age == "")
    {
        header('location: index.php?msg=empty_fields');
        exit();
    }
    $sql = "INSERT INTO computerscience (s_names, s_age, s_passed) VALUES ('$given_name', $given_age, $ispassed);";
    mysqli_query($conn, $sql); 
    header('location: index.php?msg=success&name=' . $given_name . '');
    exit();

}

 




else if(isset($_POST['login']))
{
    $conn = mysqli_connect("localhost", "root", "", "abanyeshuri_db");
    $given_name = $_POST['login_names'];
    $given_age = $_POST['login_age'];

    if($given_name == "" || $given_age == "")
    {
        header('location: index.php?msg=empty_fields');
        exit();
    }

    $loginSQL = "SELECT * FROM computerscience WHERE s_names = '$given_name' AND s_age = '$given_age';";
    $result = mysqli_query($conn, $loginSQL);

    $nbr = mysqli_num_rows($result);
    if($nbr == 0)
    {
        header('location: index.php?msg=loginFailed');
        exit();
    }

    while($row = mysqli_fetch_assoc($result))
    {
        echo"<center>Hello <h2>" . $row['s_names'] . "</h2>";
        if($row['s_passed'] == 1)
        {
            echo " You have <b>PASSED</b></center>";
        }
        else{
            echo " You have <b>FAILED</b></center>";
        }
    }


}
else{
    header('location: index.php');
    exit();
}
?>