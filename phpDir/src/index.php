<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <title>Conversion Application</title>
  </head>
   <body>
    <header>
    <div class="header">
    <h1>Mini Projects</h1>
    </div>
    </header>

    <main>
        <div class="threeButtons">

            <div class="convertorContainer">
            <form action="./convertors/index.php" method="post">
                <button class="glowbtn" type="submit" name="Convertors">Convertors</button>
            </form>
            </div>

            <div class="formContainer">
            <form action="./Contact-form/index.php" method="post">
                <button class="glowbtn" type="submit" name="ContactForm">Contact form</button>
            </form>
            </div>

            <div class="todoContainer">
            <form action="./todo_app/index.php" method="post">
                <button class="glowbtn" type="submit" name="ToDoApp">To Do App</button>
            </form>
            </div>

        </div>
    </main>

    <footer>Team Cyber Dogs 2023 &copy;</footer>
</body>
</html>
