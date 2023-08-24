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
            C'EST PAUL PROJECT MANAGEMENT LTD
            </h1>
            <p>C'EST PAUL Project Management Ltd Company is now the one of the best Project Management Company in the world. <br>
            Which can help you to deal with project Management Activity <br>
            Just only come in our company, you will get everthing you need in Project management because we are Experts in this field.
            </p>

            <a href="#" class="hero-btn">Visit Us To Know More</a>
          </div>
      </div>

      <?php include_once 'footer.php' ?>


      