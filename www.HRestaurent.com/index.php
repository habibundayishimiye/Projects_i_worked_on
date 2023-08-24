<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT INFORMATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-image:url(' backgr.jpg');
        }
    </style>
</head>
<body  background: "backgr.jpg";>
        <div class="col-lg-6 text-center">
        <form action="regist-process.php" method="POST">
            <h2>ENTER  YOUR INFORMATION</h2>
            <table>
                <tr>
                    <td>Names: </td>
                    <td><input type="text" name="s_names"></td>
                </tr>
                <tr>
                    <td>
                        Age: 
                    </td>
                    <td><input type="number" name="s_age"></td>
                </tr>
                <tr>
                    <td colspan="2"><center>
                        <select name="ispassed">
                            <option value="0">FAILED</option>
                            <option value="1">PASSED</option>
                        </select>
                    </center></td>
                </tr>
                <tr>
                    <td colspan="2"><center><button type="submit" name="submit">REGIST</button></center></td>
                </tr>
            </table>
        </form>
        </div>


        <div class="col-lg-6 text-center">
            <h2>REGISTERED AS:</h2><br>

            <?php
            if(isset($_GET['name']))
            {
            $conn = mysqli_connect("localhost", "root", "", "abanyeshuri_db");
            $given_name = $_GET['name'];


            $loginSQL = "SELECT * FROM computerscience WHERE s_names = '$given_name';";
            $result = mysqli_query($conn, $loginSQL);


            $nbr = mysqli_num_rows($result);
            if($nbr == 0)
            {
                echo "STOP Hacking DUDE!";
            }

            while($row = mysqli_fetch_assoc($result))
            {
                echo"<center>Registered Successfully, as: <b>" . $row['s_names'] . "</b>";
                if($row['s_passed'] == 1)
                {
                    echo " You have <b>PASSED</b></center>";
                }
                else{
                    echo " You have <b>FAILED</b></center>";
                }
            }
            }
            else
            {
                echo "REGIST First!";
            }

            ?>
        </div>
        </div>
        
        <div class="row" style="margin-top: 150px;">
            <div class="col-4">
                <form style="margin-top: 100px;" action="regist-process.php" method="POST">
                <center>
                Name: <input type="text" name="login_names">
                <br>
                Password : <input type="password" name="login_age">
                <br>
                <button type="submit" name="login">LOGIN</button>
                </center>
                </form>
            </div>

            <div class="col-8">
                <table border="2">
                <th>ID</th>
                <th>Names</th>
                <th>AGE</th>
                <th>isPassed?</th>

                <?php
                $sql_all = "SELECT * FROM computerscience;";
                $all = mysqli_query($conn, $sql_all);

                while($every = mysqli_fetch_assoc($all))
                {
                    echo "
                    <tr>
                    <td>" . $every['s_id'] . "</td>
                    <td>" . $every['s_names'] . "</td>
                    <td>" . $every['s_age'] . "</td>";

                    if($every['s_passed'] == 1)
                    {
                    echo"<td>Passed</td>";
                    }
                    
                    else
                    {
                        echo"<td>Failed</td>";
                    }
                    echo "</tr>";
                }
                ?>
                
            </table>
            </div>
        </div>
        
</body>
</html>