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
             <li class='navlink'><a href='#'>About</a></li>
             <li class='navlink'><a href='../Account/account_overview.php'>My Account</a></li>
             <li class='navlink'><a href='../Dashboard/dashboard.php'>Dashboard</a></li>
             <li class='navlink'><a href='../Signup/logout.php'>Logout</a></li>
             </ul>
            </header><br><br><br><br>
        <div class='centralize'>
            <h1 class='jumbo'>Please Select Your Taste Preference</h1>";
        }
        ?>
        <?php
            if (!isset($_SESSION['username'])) {
                exit;
            }
             else {
                echo "<div class='subBox'>
                            <img src='../img/box.png' alt='HackNSnacks Box'><br><br><br>
                            <br>
                            <br>
                            <form action='catalog.php' method='POST' onsubmit='return validateShop()'>
                            <label class='container'>All Subscriptions
                                <input type='checkbox' id='box' name='all' value='yes'>
                                <span class='checkmark'></span>
                            </label>
                            <label class='container'>Standard
                                <input type='checkbox' id='box' name='classic' value='yes'>
                                <span class='checkmark'></span>
                            </label>
                            <label class='container'>Vegan
                                <input type='checkbox' id='box' name='vegan' value='yes'>
                                <span class='checkmark'></span> 
                            </label>
                            <label class='container'>Vegetarian
                                <input type='checkbox' id='box' name='vegetarian' value='yes'>
                                <span class='checkmark'></span>
                            </label>
                            <label class='container'>Gluten-Free
                                <input type='checkbox' id='box' name='gluten-free' value='yes'>
                                <span class='checkmark'></span>
                            </label>
                            <label class='container'>Meat-Eater
                                <input type='checkbox' id='box' name='meat-eater' value='yes'>
                                <span class='checkmark'></span>
                            </label>
                            <label class='container'>Pescatarian
                                <input type='checkbox' id='box' name='pescatarian' value='yes'>
                                <span class='checkmark'></span>
                            </label><br>
                            <button type='submit' class='submit-btn'>Search</button>
                      </div>";
            }
        ?>
        <?php
        echo "</div>";
        ?>
        <script src="shop.js"></script>
</body>
</html>