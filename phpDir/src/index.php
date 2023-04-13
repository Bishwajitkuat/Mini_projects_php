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
    <h1>Conversion App</h1>
    </div>
    </header>

<main>
<!--     Temp conversion, Cel to Far and Cel to Kel -->
<div class="charts">
<div class="temp">
<h2>Temperature</h2>
<form action="index.php" method="post">
<p>Celsius to Fahrenheit</p>
<input type="number" name="celsiusToF" />
<button type="submit" name="tempSubmit">Convert</button>


<?php
if (isset($_POST['tempSubmit'])) {
    $celsius = $_POST['celsiusToF'];
    $fahrenheit = ($celsius * 1.8) + 32;
    echo "<div class='temp-result'><p>$celsius&deg;C = $fahrenheit&deg;F</p></div>";
}
?>

<p>Celsius to Kelvin</p>
<input type="number" name="celsiusToK" />
<button type="submit" name="kelvinSubmit">Convert</button>

<?php
if (isset($_POST['kelvinSubmit'])) {
    $celsius = $_POST['celsiusToK'];
    $kelvin = $celsius + 273.15;
    echo "<div class='temp-result'><p>$celsius&deg;C = $kelvin K</p></div>";
}
?>
</form>
</div>

<!-- Speed conversion, KPH to MPS and KPH to KNOTS -->
<div class="speed">
<h2>Speed</h2>
<form action="index.php" method="post">
<p>Kilometers per hour to meters per second</p>
<input type="number" name="kmhToMs" />
<button type="submit" name="speedSubmit">Convert</button>

<?php
if (isset($_POST['speedSubmit'])) {
    $kmh = $_POST['kmhToMs'];
    $ms = $kmh / 3.6;
    echo "<div class='speed-result'><p>$kmh km/h = $ms m/s</p></div>";
}
?>

<p>Kilometers per hour to knots</p>
<input type="number" name="kmhToKnots" />
<button type="submit" name="knotsSubmit">Convert</button>

<?php
if (isset($_POST['knotsSubmit'])) {
    $kmh = $_POST['kmhToKnots'];
    $knots = $kmh / 1.852;
    echo "<div class='speed-result'><p>$kmh km/h = $knots knots</p></div>";
}
?>
</form>
</div>

<!-- mass conversion, KG to G and G to KG -->
<div class="mass">
<h2>Mass</h2>
<form action="index.php" method="post">
<p>Kilograms to grams</p>
<input type="number" name="kgToG" />
<button type="submit" name="gramsSubmit">Convert</button>

<?php
if (isset($_POST['gramsSubmit'])) {
    $kg = $_POST['kgToG'];
    $g = $kg * 1000;
    echo "<p>$kg kg = $g g</p>";
}
?>

<p>Grams to kilograms</p>
<input type="number" name="gToKg" />
<button type="submit" name="kilosSubmit">Convert</button>

<?php
if (isset($_POST['kilosSubmit'])) {
    $g = $_POST['gToKg'];
    $kg = $g / 1000;
    echo "<p>$g g = $kg kg</p>";
}
?>
</form>
</div>
</div>

<!-- Reset button using PHP -->
<div class="reset">
  <form method="post" action="">
    <button class="resetBtn" type="submit" name="reset">Reset</button>
  </form>
</div>

<!-- Reset button using PHP -->
<?php
if (isset($_POST['reset'])) {
    $celsius = "";
    $fahrenheit = "";
    $kelvin = "";
    $kmh = "";
    $ms = "";
    $knots = "";
    $kg = "";
    $g = "";
}

?>

</main>

<footer>Team Alpha Dogs 2023 &copy;</footer>
</body>
</html>
