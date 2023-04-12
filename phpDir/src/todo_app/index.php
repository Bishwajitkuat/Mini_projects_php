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


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>ToDo App</title>
</head>
<body>
<form action="" method="post">
  <input type="text" name="task" placeholder="Task description">
  <button type="submit" name="addTask">Add</button>
</form>
<!-- edite task -->
<?php
if (isset($_POST["editeTask"])) {
    $id = $_POST["editeTask"];
    $sub_quary = "SELECT description FROM task WHERE id = '$id' ";
    $sub_result = mysqli_query($connection, $sub_quary);
    $description = mysqli_fetch_assoc($sub_result)["description"];
    echo "
      <div class='editDiv'>
        <form action='' method='POST' >
        <input type='text' value='$description' name='update'>
        <button type='submit' value='$id' name='updateTask'>Save</button>
        </form>
      </div>";

}
if (isset($_POST["updateTask"])) {
    $id = $_POST["updateTask"];
    $description = $_POST["update"];
    echo $id, $description;
    $update_quary = "UPDATE task SET description = '$description' WHERE id = '$id'";
    $update_result = mysqli_query($connection, $update_quary);
}
?>

<div class="taskDisplayBody">
  <!-- displaying task -->
  <?php
$select_quary = "SELECT * FROM task";
$select_result = mysqli_query($connection, $select_quary);
while ($row = mysqli_fetch_assoc($select_result)) {
    $id = $row["id"];
    $description = $row["description"];
    echo "
    <form action='' method='POST'>
      <p>$description</p>
      <div>
      <button type='submit' name='editeTask' value='$id'>Edite</button>
      <button type='submit' name='removeTask' value='$id'>X</button>
      </div>
    </form>";
}
?>

</div>
</body>
</html>
<!-- adding task -->
<?php if (isset($_POST["addTask"])) {
    $task = $_POST["task"];
    $insert_quary = "INSERT INTO `task` (description) VALUES('$task')";
    $insert_result = mysqli_query($connection, $insert_quary);
    if (!$insert_result) {
        die("query failed");
    } else {
        echo "query success!";
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

<!-- edite task -->
