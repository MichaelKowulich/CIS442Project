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
    <link rel="stylesheet" href="../Dashboard/dashboard.css">
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
             <li class='navlink'><a href='../Account/account_overview.php'>My Account</a></li>
             <li class='navlink'><a href='../Shop/shop.php'>Shop</a></li>
             <li class='navlink'><a href='../Signup/logout.php'>Logout</a></li>
             </ul>
            </header><br><br>
        <div class='centralize'>
            <h1 class='jumbo'>Cancel A Subscription</h1>";
        }
        ?>
        <?php
            if (!isset($_SESSION['username'])) {
                exit;
            }
            require_once('../connection.php');
            $uname = $_SESSION['username'];
            $uid = $_SESSION['id'];
            $sql = "SELECT * FROM subscription WHERE userId='$uid' AND status='Active'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
                echo "<div class='subBox'>
                <form action='cancel.php' method='POST' onsubmit='return verify()'>
                    <img src='../img/box.png' alt='HackNSnacks Box'><br><br><br>
                    <p> Please select a subscription to cancel: </p>
                    <br>
                    <select id='subscriptions' name='subscriptions'>
                        <option value=''>Please select a subscription</option> ";
                while($row = mysqli_fetch_assoc($result)) {
                    $type = $row["type"];
                    $cost = $row["cost"];
                    $Sid = $row["id"];
                    echo "<option value='$Sid'>$type ~ \$$cost</option>";
                }
                echo "</select><br><br><br><br><br><br>
                                <button type='submit' class='cancel-btn'>Cancel Subscription </button>
                            </form>
                         </div>";
            } else {
                echo "<div class='subBox'>
                            <img src='../img/box.png' alt='HackNSnacks Box'><br><br><br>
                            <p>You don't have any active subscriptions!</p>
                            <p>Click the button below to browse subscription options.</p>
                            <br>
                            <br>
                            <button type='button' class='cancel-btn' onclick='cancelScreen()'> Shop </button>
                         </div>";
            }
        ?>
        <?php
        echo "</div>";
        ?>
    <script src="cancel.js"></script>
</body>
</html>