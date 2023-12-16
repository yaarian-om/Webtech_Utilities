<?php

require_once '../model/UserRepo.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>





<table>
    <tr>
        <th>User ID</th>
        <th>Email</th>
        <th>Password</th>
        <th>Type</th>
        <th>Action</th>
    </tr>
        <?php

        $data = findAllUsers();

        foreach ($data as $row){

            echo '<tr>';

            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td>'.$row['password'].'</td>';
            echo '<td>'.$row['type'].'</td>';

            echo '<td>';
            echo '<form action="/WEBTECH Learn/controller/User_DeleteController.php" method="post">';
            echo '<input name="selected_user_id" value="'.$row['id'].'" hidden="hidden" type="number">';
            echo '<input type="submit" value="Delete"">';
            echo '</form>';
            echo '</td>';

            echo '</tr>';


        }



        ?>
</table>

</body>
</html>
