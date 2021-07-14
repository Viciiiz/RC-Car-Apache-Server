# RC-Car-Apache-Server

Control the RC Car from the Apache Web Server hosted on Raspberry Pi

<html>
    <body>
        An open source joystick project made with Javascript, HTML5 and CSS3 was cloned from https://github.com/bobboteck/JoyStick.git under the <i>Open-Joystick</i> folder. <br><br>
        In this project, a <a href="https://github.com/bobboteck/JoyStick.git">joystick</a> will be available on the Apache Webserver of the Raspberry Pi that controls the RC car. From there, the joystick will return 2 values to the pi: <br>
        <ol>
            <li>y-position: indicates the state of the car (moving forward, backward, or at a stopping state).</li>
            <li>x-position: an int value that will control the direction of the front wheels.</li><br>
        </ol>
        The Raspberry Pi GPIO pins will be controlled in Python, and the communication between the pi and the server will be done in PHP. PHP allows an easy execution of codes on the command line.
    </body>
</html>
