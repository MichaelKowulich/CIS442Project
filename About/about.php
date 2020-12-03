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
    <link rel="stylesheet" href="about.css">
    <script>
        function homescreen() {
            window.location.href = "../index.php";
        }
    </script>
<title>Hack N' Snacks About Page</title>
</head>
<body>
<header>
       <h1 class="logo" onclick="homescreen()">Hack N` Snacks</h1>
        <ul class="nav">
 <?php
            if(!isset($_SESSION["username"])) {
                echo '<li class="navlink"><a href="../index.php">Home</a></li>';
                echo '<li class="navlink"><a href="../Signup/signup.php">Login / Sign Up</a></li>';
            } else {
                $username = $_SESSION['username'];
                echo "<li class='navlink'><a href='../Dashboard/dashboard.php'>Dashboard</a></li>";
                echo "<li class='navlink'><a href='../Shop/shop.php'>Shop</a></li>";
                echo "<li class='navlink'><a href='../Account/account_overview.php'>$username's Account</a></li>";
                echo "<li class='navlink'><a href='../Signup/logout.php'>Logout</a></li>";
            }
        ?>
      </ul>
</header><br><br><br><br>
<div class="centralize">
    <div class='paragraph'>
    <h1 class="jumbo">How It Works</h1>
    <p class ="jumbotron"> The goal is for you to find the subscription that best suits you. Create a great, customizable 
        account that will keep your subscription. Then, check out the options: Standard (No food allergies or restrictions), 
        Vegan, Vegetarian, Gluten-Free, Meat-Eater and Pescatarian. Select a subscription that fits how you eat or maybe 
        something you want to try.Then await its arrival and dig in! 
<div class="row">
    <div class="column">
        <img src="login.png" alt="Login" style="width:10em; height:10em;" >
    </div>
    <div class="column">
        <img src="checkbox.jpg" alt="Check" style="width:10em; height:10em;">
    </div>
    <div class="column">
        <img src="payment.png" alt="Payment" style="width:10em; height:10em;">
    </div>
</div>
        <br><br><br><br><br>
    <h1 class="jumbo">About Hack n' Snacks </h1> 
    <p class="jumbotron">Hack n’ Snacks provides various meals of all kinds to consumers by the click of a few buttons! 
        They are easy to make, nutritious, and most definitely delicious. Hack n’ Snacks is looking to help the parents, 
        families, or anyone in general, who is struggling with the current pandemic we all are living through. We wanted to 
        create this easy, affordable, meal service that you can order online so that you can avoid the hassle of leaving the 
        house. We also were aware of parents and families having to feed their kids who were home from school. The meals we 
        wanted to sell were trying to be geared towards that very situation; to make it easier, quicker, and more affordable. 
        This was so a parent working from home would not have to worry about not having lunch or dinner every single night. 
     <br><br><br>
    </div>
</div>
</body>
</html>