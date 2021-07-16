<!DOCTYPE html>
<html lang="en">

<head>
    <title>RC Car Joystick</title>
    <meta charset="utf-8">
    <link rel="Stylesheet" href="style.css" />
    <script src="/Open-Joystick/joy.js"></script>
</head>

<body>

    <div class="div_wrap">
        <div class="header">
            <h1 class="header_text">
                RC-Car Controller
            </h1>
        </div>
        <div id="joy3Div"></div>
        <div class="joy3DivValue">
            X :<input id="joy3X" type="text" /></br>
            Y :<input id="joy3Y" type="text" />
        </div>
    </div>


    <div class="buttons_container">
        <div class="buttons_container_first_row">
            <form class="button_form" action="index.php" method="post">
                <input id="forward_b" class="button" type="submit" name="direction" value="^left">
                <input id="forward_b" class="button" type="submit" name="direction" value="^">
                <input id="forward_b" class="button" type="submit" name="direction" value="^right">
            </form>
        </div>
        <div class="buttons_container_second_row">
            <!-- <label for="myCheck">Car Direction:</label> 
            <input type="checkbox" id="myCheck" onclick="myFunction()"> -->
        </div>
        <div class="buttons_container_third_row">
            <form class="button_form" action="index.php" method="post">
                <input class="button" type="submit" name="direction" value="vleft">
                <input class="button" type="submit" name="direction" value="v">
                <input class="button" type="submit" name="direction" value="vright">
            </form>
        </div>
    </div>

    <script type="text/javascript">
        var joy3Param = {
            "title": "joystick3"
        };
        var Joy3 = new JoyStick('joy3Div', joy3Param);

        var joy3X = document.getElementById("joy3X");
        var joy3Y = document.getElementById("joy3Y");

        setInterval(function() {
            joy3X.value = Joy3.GetX();
        }, 50);
        setInterval(function() {
            joy3Y.value = Joy3.GetY();
        }, 50);
    </script>

    <?php
    $status = $_POST["direction"];
    $command = 'python direct-car.py ' . $status;
    $command_to_send = escapeshellcmd($command);
    $output = shell_exec($command_to_send);
    ?>


</body>

</html>