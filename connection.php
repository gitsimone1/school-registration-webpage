<?php
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbname= "schoolreg";

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if (!$connection){
        echo "Connection Failed!";
    }


