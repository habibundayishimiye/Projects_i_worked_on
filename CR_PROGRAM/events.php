<?php include_once 'header.php' ?>

<?php
if(isset($_GET['msg']))
{
  if($_GET['msg'] == "incorrect_logins")
  {
    msgError("Incorrect Logins", "Unable to login due to wrong credentials!");
  }
  if($_GET['msg'] == "empty_fields")
  {
    msgError("Some fields are empty", "Unable to login due to some fields are empty!");
  }

}


?>

<br>
      <div class="home_contents">
        <div class="welcome_text"><br>
            <h1>
            CR_PROGRAM
            </h1>
            <p> 
                <h3><center>Date:22/07/2023</center></h3>
                <h2><b>INDIVIDUALS TRAINING PERIOD ON BUSINESS START UP</b></h2>
                <h3>ADVISORY KEYS IMPORTANT FOR BUSINESS START UP</h3>
            </p>
            <table border="2">
                <tr>
                    <td>No</td>
                    <td>PRESANTER'S NAMES</td>
                    <td>ACADEMIC ADDRESS</td>
                    <td>ROLES</td>
                    <td>TIME LINE</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>RWEMA Vierra</td>
                    <td>Business Partner  </td>
                    <td>MC</td>
                    <td>09:30 am-11:30 am</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>KWIZERA Egide</td>
                    <td>Business Partner  </td>
                    <td>Opening remarks</td>
                    <td>09:32 am-09:40am</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Advisor/consultant NSANZAMAHORO Evariste </td>
                    <td>Finance and CPA students in UR- Gikondo campus</td>
                    <td> <ol>
                        <li>How to conduct financial analysis in terms of capital and income on startup business.</li>
                        <li>How could you determine and conform that your business should be successfully before to start it.</li>
                    </ol>  </td>
                    <td>09:40am-10:10am</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Advisor/consultant NIYONKURU J.Paul</td>
                    <td>Project management student in Kepler university </td>
                    <td>How to conduct critical project analysis and project planning on startup business and how to manage your business in order to avoid losses.</td>
                    <td>10:10am -10:50am</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Advisor/consultant IT.Khabibullah NDAYISHIMIYE</td>
                    <td>Computer science student in UR-KEST campus </td>
                    <td>How to use technology should be engaged in providing services as tool to start business.  </td>
                    <td>10:5Oam-11:20am</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Advisor/consultant Mrs.Cyntia UMUHOZA</td>
                    <td>Masters student in Business administration  </td>
                    <td>Overview on how to administrate business and how to determine business challenges  and how can we to put in place tactics/ strategies to mitigate the challenges </td>
                    <td>11:20am-11:30am</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Career guidance</td>
                    <td>Lecturer in business administration </td>
                    <td>How to make good choice and good decision before to start business.</td>
                    <td>11:30am up to the end</td>
                </tr>
            </table>
          </div>
      </div>

      <?php include_once 'footer.php' ?>


      