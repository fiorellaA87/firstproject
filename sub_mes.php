<div id='sub_mess'>
<?php
  if (isset($_REQUEST["submit"])) {

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo('Congratulations '. $name .'! <br> You have been subscribed with the
    email '. $email .'<br/>Enjoy living a healthy lifestyle!');

  } else{
    include('includes/subscribe.php');
  }
?>
</div>
