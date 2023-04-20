<?php
$host = "teamdb";
$user = "lionUser";
$pass = "lionPass";
$db_name = "lionDB";
$connection = new mysqli($host, $user, $pass, $db_name);
if ($connection->connect_error) {
    die("connection failed" . $connection->connect_error);
}
?>
<!-- adding task -->
<?php if (isset($_POST["addTask"])) {
    $task = $_POST["task"];
    $task = str_replace("'","''",$task);
    $insert_query = "INSERT INTO `task` (description) VALUES('$task')";
    $insert_result = mysqli_query($connection, $insert_query);
    if (!$insert_result) {
        die("query failed");
    }
}?>
<!-- removing task -->
<?php
if (isset($_POST["removeTask"])) {
    $id = $_POST["removeTask"];
    $delete_query = "DELETE FROM task WHERE id = '$id'";
    $delete_result = mysqli_query($connection, $delete_query);
    if (!$delete_result) {
        die("delete query failed!");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>ToDo App</title>
</head>
<body>
  <?php include "../header.php"?>
  <main>
    <h1>To Dos</h1>
  <div class="addDiv">
  <form action="index.php" method="post">
    <input type="text" name="task" placeholder="Task description">
    <button type="submit" name="addTask">Add</button>
  </form>
</div>
<!-- edite task -->
<?php
$id_to_edit = 0;
if (isset($_POST["editeTask"])) {
    $id_to_edit = $_POST["editeTask"];
    $sub_query = "SELECT description FROM task WHERE id = '$id_to_edit' ";
    $sub_result = mysqli_query($connection, $sub_query);
    $description = mysqli_fetch_assoc($sub_result)["description"];

}
if (isset($_POST["updateTask"])) {
    $id = $_POST["updateTask"];
    $description = $_POST["update"];
    $description = str_replace("'","''",$description);
    $update_query = "UPDATE task SET description = '$description' WHERE id = '$id'";
    $update_result = mysqli_query($connection, $update_query);
}
?>

<div class="taskDisplayBody">
  <!-- displaying task -->
  <?php
$select_query = "SELECT * FROM task";
$select_result = mysqli_query($connection, $select_query);
while ($row = mysqli_fetch_assoc($select_result)) {
    $id = $row["id"];
    $description = $row["description"];
    if ($id == $id_to_edit) {
      $description = htmlspecialchars($description, ENT_QUOTES);
      echo "
        <form action='index.php' method='POST'>
        <input type='text' value='$description' name='update'>
        <div class='buttonsBox'>
          <button type='submit' value='$id' name='updateTask'>Save</button>
          <button type='submit' name='removeTask' class='deleteBtn' value='$id'>&#x1f5d1;</button>
        </div>
        </form>";
    } else {
        echo "
        <form action='index.php' method='POST'>
          <p>$description</p>
          <div class='buttonsBox'>
          <button type='submit' name='editeTask' value='$id'>&#x270D;</button>
          <button type='submit' name='removeTask' class='deleteBtn' value='$id'>&#x1f5d1;</button>
          </div>
        </form>";
    }
}
?>

</div>
  </main>
  <footer>Team Alpha Dogs 2023 &copy;</footer>
</body>
</html>
