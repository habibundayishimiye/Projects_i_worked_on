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


      <div class="home_contents">
        <div class="welcome_text">
            <h1>
            CR_PROGRAM
            </h1>
            <p> CR_PROGRAM Company is now the one of the best Pprocurement logistic and supply chain management  Company in the world. <br>
            Which can help you to deal with procurement logistic and supply chain management  Activity <br>
            Just only come in our company, you will get everthing you need in procurement logistic and supply chain management  because we are Experts in this field.
            </p>

            <a href="events.php" class="hero-btn">To day's Event</a>
          </div>
      </div>

      <?php include_once 'footer.php' ?>


      