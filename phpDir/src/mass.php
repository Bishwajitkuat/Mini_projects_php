<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./mass.css">
  <title>Mass converter</title>
</head>
<body>
  <div id="massConverter">
    <h1 id="mConverterText">Mass converter</h1>
    <div id="units">
      <div id="leftUnit">
        <p id="leftUnitText">
          <?php 
            $leftUnit = "Kilos";
            echo "$leftUnit";
          ?>
        </p>
        <form method="post">
          <input id="form" name="form" type="number">
          <label for="form">kg</label>
        </form>
      </div>
      <button type="submit" id="switchButton">
        <p class="arrow">&#10230</p>
        <p>TO</p>
        <p class="arrow">&#10229</p>
      </button>
      <div id="rightUnit">
        <p id="rightUnitText">Grams</p>
        <div id="outputBlock">
          <div id="outputResult"></div>
          <div id="outputText">gr</div>
        </div>
      </div>
    </div>
    <form method="post">
      <button type="submit" name="convert" id="convertButton">Convert</button>
    </form>
  </div>
</body>
</html>