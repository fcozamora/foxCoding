<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoer" content="width=device-width,initial-scale=1.0">
    <title>adminView</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <header>
        <img class="logo" src = "../images/foxCoding.svg">
        <nav class="navigationAdmin">
            <form action="../Controllers/logoutController.php" method="post">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Contact</a>
                <button type="submit" class="logoutButton-popup">Log out</button>
            </form>
        </nav>
    </header>

    <div class="container">
        <table class="tableUsers" border=".5">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ROLE</th>
            </tr>
            <?php
            require_once("../Models/adminTableModel.php");
            usersTable();
            ?>
        </table>
        
    </div>
</body>
</html>