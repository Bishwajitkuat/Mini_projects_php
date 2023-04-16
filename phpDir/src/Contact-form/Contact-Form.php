<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="contactUs.css">
    <title>Contact Us</title>
</head>

<body>

  <div class="container">
    <h2>Contact Us</h2>
        
    <form method="post" action="contactUs.php" class="form">
      <div class="form-items">
        <label for="name" class="list">Name</label>
        <input type="text" class="form-input" id="name" name="name" placrholder="Type name" tabindex="1" required>
      </div>

      <div class="form-items">
        <label for="email" class="list">Email</label>
        <input type="text" class="form-input" id="email" name="email" placrholder="example@gmail.com" tabindex="2" required>
      </div>

      <div class="form-items">
        <label for="subject" class="list">Subject</label>
        <input type="text" class="form-input" id="subject" name="subject" placrholder="Subject of the message" tabindex="3" required>
      </div>

      <div class="form-items">
        <label for="message" class="list">Message</label>
        <textarea class="form-input" rows="5" cols="45" id="message" name="message" placrholder="Your message.." tabindex="4"></textarea>
      </div>

      <button id="submit">SEND<span class="material-symbols-outlined">
        send
        </span>
      </button>
           
    </form>
  </div> 
    
</body>
</html>