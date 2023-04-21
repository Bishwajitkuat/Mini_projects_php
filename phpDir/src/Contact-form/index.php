<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="Contact-Form .css">
    <title>Contact Us</title>
</head>
<body>
<?php include "../header.php"?>
<?php
$nameError = "";
$emailError = "";
$subjectError = "";
$messageError = "";
$name = "";
$email = "";
$subject = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "This field is required.";
    } else {
        $name = given_info($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailError = 'This field is required';

    } else {
        $email = given_info($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Enter valid email";
        }
    }

    if (empty($_POST["subject"])) {
        $subjectError = 'Subject cannot be empty.';
    } else {
        $subject = given_info($_POST["subject"]);
    }

    if (empty($_POST["message"])) {
        $messageError = 'Empty message cannot be sent.';
    } else {
        $message = given_info($_POST["message"]);
    }

}
function given_info($data)
{
    return $data;
}

?>

  <div class="container">
    <h2>Contact us</h2>

    <form method="POST" action="process-form.php" class="form">
      <div class="form-items">
        <label for="name" class="list">Name</label>
        <input type="text" class="form-input" id="name" name="name" value="" required>
       <?php echo $nameError; ?>

      </div>

      <div class="form-items">
        <label for="email" class="list">Email</label>
        <input type="email" class="form-input" id="email" name="email" value="" required>
        <?php echo $emailError; ?>

      </div>

      <div class="form-items">
        <label for="subject" class="list">Subject</label>
        <input type="text" class="form-input" id="subject" name="subject" value="" required></input>
        <?php echo $subjectError; ?>
      </div>

      <div class="form-items">
        <label for="message" class="list">Message</label>
        <textarea class="form-input" rows="5" cols="45" id="message" name="message" value="" required></textarea>
        <?php echo $messageError; ?>
      </div>

      <button type="submit" >SEND</button>
    </form>


  </div>
<footer>Team Alpha Dogs 2023 &copy;</footer>
</body>
</html>

