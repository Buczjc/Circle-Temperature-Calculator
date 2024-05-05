<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 95vh;
    background: rgb(36,110,221);
background: linear-gradient(90deg, rgba(36,110,221,1) 0%, rgba(95,176,97,1) 10%, rgba(200,209,85,1) 40%, rgba(214,178,11,1) 79%, rgba(167,82,82,1) 100%);
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 2px solid rgb(255, 255, 255, .2);
    width: 350px;
    height: 360px;
    border-top-left-radius: 8px;
    border-bottom-right-radius: 8px;
}

.input-display {
    width: 300px;
    height: 60px;
    margin-bottom: 25px;
    border: none;
    border-radius: 6px;
    font-family: serif;
    font-size: larger;
    padding-left: 10px;
}

.label-ean {
    font-family: monospace;
}

.container-for-input {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.container-for-input input {
    width: 230px;
    height: 20px;
    margin-bottom: 30px;
    border: none;
    border-radius: 2px;
}

.btn {
    display: flex;
    justify-content: space-evenly;
    
}

.f-c-btn, .c-f-btn {
    background-image: linear-gradient(to right, #C02425 0%, #F0CB35  51%, #C02425  100%);
    font-family: cursive;
    font-size: medium;
    border-radius: 10px;
    width: 30%;
    border: none;
    transition: 0.5s;
    box-shadow: 0 0 20px #eee;
}

.f-c-btn:hover, .c-f-btn:hover {
    font-family: cursive;
    font-size: medium;
    border-radius: 5px;
    width: 30%;
    border: none;
    background-position: right center;
    color: #fff;
}

.f-c-btn:active, .c-f-btn:active {
    background-image: linear-gradient(to right, #C02425 0%, #F0CB35  51%, #C02425  100%);
    font-family: cursive;
    font-size: medium;
    border-radius: 10px;
    width: 30%;
    border: none;
    transition: 0.5s;
    box-shadow: 0 0 20px #eee;
    background: rgb(233,3,5);
background: linear-gradient(90deg, rgba(233,3,5,1) 0%, rgba(255,205,0,1) 50%, rgba(255,0,2,1) 100%);
}

.main-menu{
    margin-top: 30px;
    text-decoration: none;
    font-family: sans-serif;
    background-color: lightskyblue;
    color: black;
    border-radius: 4px;
    padding: 5px;
    font-size: smaller;
}

.main-menu:hover{
    margin-top: 30px;
    text-decoration: none;
    font-family: sans-serif;
    background-color: lightskyblue;
    color: black;
    border-radius: 4px;
    padding: 5px;
    font-size: smaller;
    opacity: 0.7;
}

.main-menu:active{
    margin-top: 30px;
    text-decoration: none;
    font-family: sans-serif;
    background-color: rgb(0, 153, 248);
    color: black;
    border-radius: 4px;
    padding: 5px;
    font-size: smaller;
}
    </style>
</head>
<body>
    
    <div class="container">
        <h3 style="font-family: cursive;">Fahrenheit-Celsius Converter</h3>
        <div class="form-container">
            <form action="temp.php" method="post">
            <input id="display" class="input-display" readonly><br>
            <div class="container-for-input">
                <label for="num" class="label-ean">Enter a number</label><br>
                <input type="text" name="number" id="num">
            </div>
            <div class="btn">
                <input type="submit" class="f-c-btn" value="F-C" name="faren-func">
                <input type="submit" class="c-f-btn" value="C-F" name="cel-func">
            </div>
            </form>
        </div>
        <a href="homepage.html" class="main-menu">Main Menu</a>
    </div>
</body>
</html>

<?php

if(isset($_POST['faren-func'])) {
    $number = $_POST['number'];
    if (!is_numeric($number)) {
        echo "<script>document.getElementById('display').value = 'ERROR, ENTER A VALID (N)';</script>";
    }else{
        $farenheit = ($number - 32) * (5/9);
        $farenheit = number_format($farenheit, 4, '.', '');
        echo "<script>document.getElementById('display').value = '$farenheit';</script>";
    }
}
if(isset($_POST['cel-func'])) {
    $number = $_POST['number'];
    if (!is_numeric($number)) {
        echo "<script>document.getElementById('display').value = 'ERROR, ENTER A VALID (N)';</script>";
    }else{
        $celcius = ($number * 9/5) + 32;
        $celcius = number_format($celcius, 1, '.', '');
        echo "<script>document.getElementById('display').value = '$celcius';</script>";
    }
}
?>