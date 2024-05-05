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
    background: rgb(237,203,210);
background: linear-gradient(90deg, rgba(237,203,210,1) 0%, rgba(128,196,183,1) 35%, rgba(227,133,107,1) 100%);
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
    margin-bottom: 40px;
    flex-wrap: wrap;
}

.area-btn, .cir-btn, .die-btn {
    background-image: linear-gradient(to right, #CC95C0 0%, #DBD4B4  51%, #CC95C0  100%);
    transition: 0.5s;
    box-shadow: 0 0 20px #eee;
    font-family: cursive;
    font-size: xx-small;
    border-radius: 5px;
    width: 30%;
    border: none;
    height: 20px;
}


.area-btn:hover, .cir-btn:hover, .die-btn:hover  {
    font-family: cursive;
    font-size: xx-small;
    color: white;
    border-radius: 5px;
    width: 30%;
    border: none;
    height: 20px;
    
}

.area-btn:active, .cir-btn:active, .die-btn:active {
    font-family: cursive;
    font-size: xx-small;
    color: white;
    border-radius: 5px;
    width: 30%;
    border: none;
    height: 20px;
    background: rgb(223,62,188);
background: linear-gradient(90deg, rgba(223,62,188,1) 0%, rgba(221,198,95,1) 50%, rgba(213,67,181,1) 100%);
}

.main-menu{
    
    text-decoration: none;
    font-family: sans-serif;
    background-color: lightskyblue;
    color: black;
    border-radius: 4px;
    padding: 5px;
    font-size: smaller;
}

.main-menu:hover{
    
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
        <h3 style="font-family: cursive;">Circle Calculator</h3>
        <div class="form-container">
            <form action="circle.php" method="post">
            <input id="display" class="input-display" readonly><br>
            <div class="container-for-input">
                <label for="num" class="label-ean">Enter a radius</label><br>
                <input type="text" name="number" id="num">
            </div>
            <div class="btn">
                <input type="submit" class="area-btn" name="area-func" value="Area" >
                <input type="submit" class="cir-btn" name="circumference-func" value="circumference">
                <input type="submit" class="die-btn" name="diameter-func" value="Diameter">
            </div>
            </form>
        </div>
        <a href="homepage.html" class="main-menu">Main Menu</a>
    </div>
    
</body>
</html>

<?php
if(isset($_POST['area-func'])) {
    $number = $_POST['number'];
    if (!is_numeric($number) || $number <= 0) {
        echo "<script>document.getElementById('display').value = 'ERROR, ENTER A VALID RADIUS';</script>";
    }else{
        $area = M_PI * $number * $number;
        $area = number_format($area, 2, '.', '');
        echo "<script>document.getElementById('display').value = '$area';</script>";
    }
}
if(isset($_POST['circumference-func'])) {
    $number = $_POST['number'];
    if (!is_numeric($number) || $number <= 0) {
        echo "<script>document.getElementById('display').value = 'ERROR, ENTER A VALID RADIUS';</script>";
    }else{
        $circumference = 2 * M_PI * $number;
        $circumference = number_format($circumference, 2, '.', '');
        echo "<script>document.getElementById('display').value = '$circumference';</script>";
    }
}
if(isset($_POST['diameter-func'])) {
    $number = $_POST['number'];
    if (!is_numeric($number) || $number <= 0) {
        echo "<script>document.getElementById('display').value = 'ERROR, ENTER A VALID RADIUS';</script>";
    }else{
        $diameter = 2 * $number;
        $diameter = number_format($diameter, 2, '.', '');
        echo "<script>document.getElementById('display').value = '$diameter';</script>";
    }
}
?>