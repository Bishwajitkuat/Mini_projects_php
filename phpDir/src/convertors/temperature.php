<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="temperature.css">
    <title>Temperature Conversion</title>
</head>
<body>
    <?php

    //Fahrenheit to celcius
    function fahrenheit_celcius ($tempValue)
    {
	$celsius = 5/9* ($tempValue - 32);
	return $celsius ;
    }

    //Fahrenheit to kelvin
    function fahrenheit_kelvin ($tempValue)
    {
	$kelvin=fahrenheit_celcius ($tempValue) + 273.15;
	return $kelvin ;
    }

    //Celsius to fahrenheit
    function celsius_fahrenheit ($tempValue)
    {
        $fahrenheit = $tempValue * 9/5 + 32;
        return $fahrenheit ;
    }

    //Celsius to kelvin 
    function celsius_kelvin ($tempValue)
    {
        $kelvin = $tempValue + 273.15;
        return $kelvin ;
    }

    //Kelvin to fahrenheit 
    function kelvin_fahrenheit ($tempValue)
    {
        $fahrenheit = 9/5 * ($tempValue-273.15) + 32;
        return $fahrenheit ;
    }

    //Kelvin to celsius 
    function kelvin_celsius ($tempValue)
    {
        $celsius = $tempValue - 273.15;
        return $celsius ;
    }
    ?>
    <div id ="box">
        <h1>Temperature Convertor</h1>
	    <form class = "tempForm" action="temperature.php" method="POST">
            <div>
                <div><label for="input_temperature_type">Choose Input Type </label></div>   
                <select name="input_temperature_type"> 
                    <option value="choose">Choose</option>
                    <option value="fahrenheit">Fahrenheit</option>
                    <option value="celsius">Celsius</option>
                    <option value="kelvin"> Kelvin</option>
                </select>        
            </div>
            <div class = "temptatureInput">
                <label for="input">Insert Temperature</label> 
                <input type="text" name="$tempValue">
            </div>
            
            <div>
                <div><label for="output_temperature_type">Choose Output Type </label></div>   
                <select name="output_temperature_type">
                    <option value="choose">Choose</option>
                    <option value="fahrenheit">Fahrenheit</option>
                    <option value="celsius">Celsius</option>
                    <option value="kelvin">Kelvin</option>
                </select>
            </div>
            <div id="btn">
                <button class="convertBtn" type="submit">Convert</button>
                <button class="reset">Reset</button>
            </div>
            
        </form>    
        <div class="tempResult">
            <?php
            if($_SERVER["REQUEST_METHOD"] === "POST") {
            
            $input_temperature_type=$_POST['input_temperature_type'];
            $output_temperature_type=$_POST['output_temperature_type'];
            $tempValue = $_POST['$tempValue'];
            
            //Fahrenheit to celsius and kelvin
            if ($input_temperature_type=='fahrenheit') 
            {
                if ($output_temperature_type=='celsius') 
                {
                    $celsius=fahrenheit_celcius($tempValue);
                    echo "$tempValue Fahrenheit = $celsius Celsius";
                }  elseif ($output_temperature_type=='kelvin') 
                {
                    $kelvin=fahrenheit_kelvin($tempValue);
                    echo "$tempValue Fahrenheit = $kelvin Kelvin";
                }  else 
                {
                    echo "$tempValue Fahrenheit";
                }
            }
            //Celsius to fahrenheit and kelvin
            if ($input_temperature_type=='celsius') 
            {
                if ($output_temperature_type=='fahrenheit') 
                {
                    $fahrenheit=celsius_fahrenheit($tempValue);
                    echo "$tempValue Celsius  = $fahrenheit Fahrenheit";
                }  elseif ($output_temperature_type =='kelvin') 
                {
                    $kelvin=celsius_kelvin($tempValue);
                    echo "$tempValue Celsius   = $kelvin Kelvin";
                }  else 
                {
                    echo "$tempValue Celsius";
                }
            }
            //Kelvin to fahrenheit and celsius
            if ($input_temperature_type=='kelvin') 
            {
                if ($output_temperature_type =='fahrenheit') 
                {
                    $fahrenheit=kelvin_fahrenheit($tempValue);
                    echo "$tempValue Kelvin  = $fahrenheit Fahrenheit";
                }  elseif ($output_temperature_type =='celsius') 
                {
                    $celsius=kelvin_celsius($given_value);
                    echo "$tempValue Kelvin  = $celsius Celsius";
                }  else 
                {
                    echo "$tempValue Kelvin";
                }
            } 
            
            }?>   
        </div>	
    </div>
</body>
</html> 