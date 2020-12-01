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
    <link rel="stylesheet" href="./style.css">
    <script>
        function homescreen() {
            window.location.href = "index.php";
        }
        function about() {
            window.location.href = "About/about.php";
        }
    </script>
    <title>Hack N` Snacks</title>
</head>
<body>
    <header>
       <h1 class="logo" onclick="homescreen()">Hack N` Snacks</h1>
        <ul class="nav">
        <?php
            if(!isset($_SESSION["username"])) {
                echo '<li class="navlink"><a href="index.php">Home</a></li>';
                echo '<li class="navlink"><a href="About/about.php">About</a></li>';
                echo '<li class="navlink"><a href="Signup/signup.php">Login / Sign Up</a></li>';
            } else {
                $username = $_SESSION['username'];
                echo "<li class='navlink'><a href='Dashboard/dashboard.php'>Dashboard</a></li>";
                echo "<li class='navlink'><a href='Shop/shop.php'>Shop</a></li>";
                echo "<li class='navlink'><a href='Account/account_overview.php'>$username's Account</a></li>";
                echo "<li class='navlink'><a href='Signup/logout.php'>Logout</a></li>";
            }
        ?>
        </ul>
    </header><br><br><br><br><br><br><br><br><br><br><br>
    <div class="centralize">
        <h1 class="jumbo">Hack N` Snacks</h1>
        <p class="jumbotron">Ready to prep meal kits at your doorstep since 2020</p>
        <br><br><br>
        <button class="button button2" onclick="about()"> Learn More </button>
    </div>
</body>
</html>