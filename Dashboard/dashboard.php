<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="../style.css">
    <script>
        function homescreen() {
            window.location.href = "../index.php";
        }
    </script>
    <title>Hack N` Snacks Dashboard</title>
</head>
<body>
    <?php
        if (!isset($_SESSION["username"])) {
            echo "Error: You are not logged in!";
            exit();
        }
        else {
            #If User is logged in, display dashboard.
            echo "<header>
            <h1 class='logo' onclick='homescreen()'>Hack N` Snacks</h1>
             <ul class='nav'>
             <li class='navlink'><a href='../index.php'>Home</a></li>
             <li class='navlink'><a href='#'>About</a></li>
             <li class='navlink'><a href='#'>My Account</a></li>
             <li class='navlink'><a href='#'>Shop</a></li>
             <li class='navlink'><a href='../Signup/logout.php'>Logout</a></li>
             </ul>
            </header>";
        }
    ?>
</body>
</html>