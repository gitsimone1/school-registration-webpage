<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irving Academy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Irving Academy Registration</h1>
    </header>
    <main>
        <div>
            <p>Please Enter Student Details Below:</p>
        </div>
        <form action="save.php" method="post">
            <input type="int" name="sn" min="1" max="203" placeholder="S/N" id="sn">
            <input type="text" name="firstname" placeholder="First Name" id="firstname">
            <input type="text" name="lastname" placeholder="Last Name" id="lastname">
            <input type="number" name="age" min="10" max="19" placeholder="Age" id=""age>
            <input type="date" name="birthday" min="2005-01-01" max="2014-12-31" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" placeholder="Date of Birth" id="birthday">
           <input type="submit" value="Save" id="save">
        </form>
       
    </main>
</body>
</html>