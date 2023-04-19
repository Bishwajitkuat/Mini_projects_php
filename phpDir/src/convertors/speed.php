<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="speed.css">
  <title>Speed conversion</title>
</head>
<body>
  <?php 
  function speedConverter($speed, $from, $to) {
    if ($to !== $from) {
      if($to === "km/h") {
        $speed = $speed *1.609;
        return $speed;
      } else {
        $speed = $speed *0.621;
        return $speed;
      }
    } else {
      $speed = $speed;
      return $speed;
    }
  }
  ?>
  <div class="speedDiv">
    <form class="formDiv" action="speed.php" method="POST" >
    <div class="speedInputDiv">
      <label for="speed">Speed</label>
      <input type="number" name="speed" id="speed">
    </div>
     <div class="speedUnitDiv">     
        <label for="from">From</label>
        <select name="from" id="from">
        <option value="km/h">km/h</option>
        <option value="m/h">m/h</option>
        </select>
        <label for="to">To</label>
        <select name="to" id="to">
        <option value="km/h">km/h</option>
        <option value="m/h">m/h</option>
        </select>
      </div>
      <button class="speedBtn" type="submit" >Convert</button>
    </form>
    <div class="speedResultDiv">
    <?php 
    if($_SERVER["REQUEST_METHOD"] === "POST") {
    $hasData = $_POST["speed"] ? true : false;
    if($hasData){
      $speed = $_POST["speed"];
      $fromUnit = $_POST["from"];
      $toUnit = $_POST["to"];
      $convertedSpeed = speedConverter($speed,$fromUnit, $toUnit);
      echo "<h3>Result</h3>";
      echo "<p class='resultPera'>".$speed.$fromUnit. " = " .$convertedSpeed.$toUnit."</p>";
    } else {
      echo "<p class='resultPera'>Please give some vale in speed field</p>";
    }
    }
    ?>
    </div>
    <form action="index.php">
     <button type="submit">Home</button> 
    </form>
  </div>
</body>
</html>