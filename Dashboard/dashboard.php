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
    <link rel="stylesheet" href="dashboard.css">
    <script>
        function homescreen() {
            window.location.href = "../index.php";
        }
        function shop() {
            window.location.href = "../Shop/shop.php"
        }
        function cancelScreen() {
            window.location.href = "../CancelSubscription/cancelSubscription.php"
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
            </header><br><br><br><br>
        <div class='centralize'>
            <h1 class='jumbo'>My Subscriptions</h1>";
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
                while($row = mysqli_fetch_assoc($result)) {
                    $type = $row["type"];
                    $cost = $row["cost"];
                    $subId = $row["id"];
                    echo "<div class='subBox'>
                            <img src='../img/box.png' alt='HackNSnacks Box'><br><br><br>
                            <p>Type Of Subscription: $type</p>
                            <p>Cost: $cost </p>
                            <br>
                            <br>
                            <button type='button' class='cancel-btn' onclick='cancelScreen()'> Cancel Subscription </button>
                         </div>";
                }
            } else {
                echo "<div class='subBox'>
                            <img src='../img/box.png' alt='HackNSnacks Box'><br><br><br>
                            <p>You don't have any active subscriptions!</p>
                            <p>Click the button below to browse subscription options.</p>
                            <br>
                            <br>
                            <button type='button' class='cancel-btn' onclick='shop()'> Shop </button>
                         </div>";
            }
        ?>
        <?php
        echo "</div>";
        ?>
    
</body>
</html>