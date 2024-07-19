<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saved</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>saved!</h1>
</body>
</html>

<?php
    include_once("connection.php");
    if ($_SERVER ["REQUEST_METHOD"] == "POST"){
        $sn = htmlspecialchars($_POST['sn']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $age = htmlspecialchars($_POST['age']);
        $birthday = htmlspecialchars($_POST['birthday']);
    
        $sql= "INSERT INTO studentinfo (sn, firstname, lastname, age, birthday) VALUES ('$sn', '$firstname', '$lastname', '$age', '$birthday')";

        if (mysqli_query($connection, $sql)){
            echo "<script>alert('You have been registered!');</script>";
        }else {
            echo "Error!".$sql. "<br>".mysqli_error($connection);
        }
    }
 mysqli_close($connection);
 ?>




