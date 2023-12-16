<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>HELLO STUDENT, PLEASE SIGN UP</h1>

<form action="/WEBTECH Learn/controller/StudentSignupController.php" method="post">
    <div>
        <label for="name"><b>Name</b></label>
        <input type="text" id="name" placeholder="Enter Name" name="name"> <br><br>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter email" id="email" name="email"> <br><br>

        <label for="password"><b>Password</b></label>
        <input type="password" id="password" placeholder="Enter Password" name="password"> <br><br>

        <button type="submit">Signup</button>
    </div>
</form>


</body>
</html>
