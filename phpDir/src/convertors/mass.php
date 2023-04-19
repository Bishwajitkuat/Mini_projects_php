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
    <form action="mass.php" method="post">
      <div class="units">
        <div class="leftUnit">
          <p class="leftUnitText">Kilos</p>
          <div class="inputBox">
            <input id="kilosInput" name="kilosInput" type="number">
            <label for="form">kg</label>
          </div>
        </div>
        <div class="arrowBox">
          <p class="arrow">&#10230</p>
        </div>
        <div class="rightUnit">
          <p class="rightUnitText">Grams</p>
          <div class="outputBlock">
            <div class="outputResult">
            <?php 
              if($_SERVER["REQUEST_METHOD"] === "POST"){
                if ($_POST['kilosInput']) {
                  echo (int)$_POST['kilosInput']*1000;
                }
              }
            ?>
            </div>
            <div class="outputText">gr</div>
          </div>
        </div>
      </div>
      <div class="units">
        <div class="leftUnit">
          <p class="leftUnitText">Grams</p>
          <div class="inputBox">
            <input id="gramsInput" name="gramsInput" type="number">
            <label for="form">gr</label>
          </div>
        </div>
        <div class="arrowBox">
          <p class="arrow">&#10230</p>
        </div>
        <div class="rightUnit">
          <p class="rightUnitText">Kilos</p>
          <div class="outputBlock">
            <div class="outputResult">
            <?php 
              if($_SERVER["REQUEST_METHOD"] === "POST"){
                if ($_POST['gramsInput']) {
                  echo (int)$_POST['gramsInput']/1000;
                }
              }
            ?>
            </div>
            <div class="outputText">kg</div>
          </div>
        </div>
      </div>
      <button type="submit" name="convert" id="convertButton">Convert</button>
    </form>
  </div>
</body>
</html>