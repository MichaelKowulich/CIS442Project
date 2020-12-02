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
    <link rel="stylesheet" href="shop.css">
    <script>
        function homescreen() {
            window.location.href = "../index.php";
        }
    </script>
    <title>Shop Hack `N Snacks</title>
</head>
<body>
    <?php
        require_once('../connection.php');
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            exit;
        }
        $type = $_POST['dietary'];
        $userId = $_SESSION["id"];
        $q = "SELECT * FROM box WHERE type='$type'";
        $result = mysqli_query($conn, $q);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $cost = $row["cost"];
                $boxId = $row["id"];
                $dietary = $row["dietary"];
                $description = $row["description"];
            }
        }
        if (!isset($_SESSION["username"])) {
            echo "Error: You are not logged in!";
            exit();
        }
        else {
            #If User is logged in, display shop
            echo "<header>
            <h1 class='logo' onclick='homescreen()'>Hack N` Snacks</h1>
             <ul class='nav'>
             <li class='navlink'><a href='../index.php'>Home</a></li>
             <li class='navlink'><a href='../About/about.php'>About</a></li>
             <li class='navlink'><a href='../Account/account_overview.php'>My Account</a></li>
             <li class='navlink'><a href='../Dashboard/dashboard.php'>Dashboard</a></li>
             <li class='navlink'><a href='../Signup/logout.php'>Logout</a></li>
             </ul>
            </header><br><br><br><br>
        <div class='centralize'>
            <h1 class='jumbo'>$type</h1>";
        }
        ?>
        <?php
            if (!isset($_SESSION['username'])) {
                exit;
            }
             else {
                echo "<div class='detailBox'>
                        <div class='infoBox'>
                            <br><br><br>
                            <img src='../img/box.png' alt='HackNSnacks Box'>
                        </div>
                        <div class='infoBox'>
                            <p> <b>$type</b> </p><br>
                            <p> $description</p>
                            <p> $$cost.00 USD </p>
                            <form action='subscribe.php' method='POST'>
                                <button type='submit' name='dietary' value='$type' class='submit-btn'>Subscribe</button>
                            </form>
                        </div>
                      </div>";
            }
        ?>
        <?php
        echo "</div>";
        ?>
        <script src="shop.js"></script>
</body>
</html>