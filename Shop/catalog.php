<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        exit;
    }
?>

<html>
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
            function shop() {
                window.location.href = "shop.php"
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
            #If User is logged in, display dashboard.
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
        <div class='centerpiece'>
            <h1 class='jumbo'>Search Query Results</h1>";
        }
        ?>
        <?php
            if (!isset($_SESSION['username'])) {
                exit;
            }
            require_once('../connection.php');
            $uname = $_SESSION['username'];
            $uid = $_SESSION['id'];
            $sql = "SELECT * FROM box WHERE 1 ";
            if ($_POST['all'] == 'yes') {
                $result = mysqli_query($conn, $sql);
            }
            else {
                $count = 0;
                $sql .= "AND ";
                if($_POST['vegan'] == 'yes') {
                    if($count >= 1){ $sql .= "OR ";}
                    $sql .= "dietary='Vegan' ";
                    $count = $count + 1;
                }
                if($_POST['classic'] == 'yes') {
                    if($count >= 1){ $sql .= "OR ";}
                    $sql .= "dietary='Classic' ";
                    $count = $count + 1;
                }
                if($_POST['vegetarian'] == 'yes') {
                    if($count >= 1){ $sql .= "OR ";}
                    $sql .= "dietary='Vegetarian' ";
                    $count = $count + 1;
                }
                if($_POST['gluten-free'] == 'yes') {
                    if($count >= 1){ $sql .= "OR ";}
                    $sql .= "dietary='Gluten-Free' ";
                    $count = $count + 1;
                }
                if($_POST['meat-eater'] == 'yes') {
                    if($count >= 1){ $sql .= "OR ";}
                    $sql .= "dietary='Meat-Eater' ";
                    $count = $count + 1;
                }
                if($_POST['pescatarian'] == 'yes') {
                    if($count >= 1){ $sql .= "OR ";}
                    $sql .= "dietary='Pescatarian' ";
                    $count = $count + 1;
                }
                $result = mysqli_query($conn, $sql);
            }
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $type = $row["type"];
                    $cost = $row["cost"];
                    echo "<div class='catalogBox'>
                            <img src='../img/box.png' alt='HackNSnacks Box'><br><br><br>
                            <p>$type</p>
                            <p>Cost: $cost USD</p>
                            <br>
                            <br>
                            <form action='subscribe.php' method='POST'>
                                <button type='submit' name='dietary' value='$type' class='submit-btn'> Subscribe </button>
                            </form>
                         </div>";
                }
            } else {
                echo "<div class='subBox'>
                            <img src='../img/box.png' alt='HackNSnacks Box'><br><br><br>
                            <p>No Results Found!</p>
                            <p>Click the button below to browse subscription options.</p>
                            <p> $sql </p>
                            <br>
                            <br>
                            <button type='button' class='submit-btn' onclick='shop()'> Shop </button>
                       </div>";
            }
        ?>
        <?php
            echo "</div>";
        ?>
    </body>
</html>