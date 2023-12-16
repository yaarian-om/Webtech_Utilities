<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<form action="/WEBTECH Learn/controller/LoginController.php" method="post">
    <div>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter email" id="email" name="email">

        <label for="password"><b>Password</b></label>
        <input type="password" id="password" placeholder="Enter Password" name="password">

        <button type="submit">Login</button>
    </div>
</form>


</body>
</html>
