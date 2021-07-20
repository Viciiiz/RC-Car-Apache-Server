
<?php

echo '
<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    <div class="buttons_container">
        <div class="buttons_container_first_row">
            <form class="button_form" method="get">
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
            <form class="button_form" method="get">
                <input class="button" type="submit" name="direction" value="vleft">
                <input class="button" type="submit" name="direction" value="v">
                <input class="button" type="submit" name="direction" value="vright">
            </form>
        </div>
    </div>
</body>
</html>';

if (isset($_GET['direction'])) {
    $status = $_GET['direction'];
    $command = 'python /var/www/html/direct-car.py ' . $status;
    putenv('PATH=/usr/local/bin');
    $command_to_send = escapeshellcmd($command);
    $output = shell_exec($command_to_send);
    // system($command);
    // echo "here <br>";
    // echo $output . "<br>";
    // echo $command_to_send . "<br>";
    // echo $status . "<br>";
    // echo $command;
}

?>

