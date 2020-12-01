<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale=1.0>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="Update_account.css">
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
             <li class='navlink'><a href='../Dashboard/dashbaord.php'>Dashboard</a></li>
             <li class='navlink'><a href='../Shop/shop.php'>Shop</a></li>
             <li class='navlink'><a href='../Signup/logout.php'>Logout</a></li>
             </ul>
            </header><br><br><br><br>
        <div class='centralize'>
            <h1 class='jumbo'>My Account</h1>";
        }
?>
<?php 
if (!isset($_SESSION['username'])) {
    exit;
}
require_once('../connection.php');
$uname = $_SESSION['username'];
$uid = $_SESSION['id'];
$sql = "SELECT * FROM user WHERE id='$uid'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $address = $row["address"];
        $uname = $row["username"];
        $eaddress = $row["email"];
        $name = $row["name"];
        echo " 
        <img src='../img/pfp.png' alt='profile picture'>
        <form action='update_account.php' method='POST'>
            <label for='address'>Street address </label>
                <input type='text' name='address' value='$address' maxlength='100' pattern='[a-z A-Z0-9,-]{7-100}' placeholder='Full Address' required><br><br>
            <label for='eaddress'>Email address </label>
                <input type='email' maxlength='50' name='email' value='$eaddress' required><br><br>
            <label for='name'>Name </label>
                <input type='text' name='name' maxlength='50' value='$name' minlength='1' pattern='[a-z A-Z]{7-50}' placeholder='Full Name' required><br><br>
            <button class='button' type='submit'>Submit Changes</button>
        </form>";
    }   
}  
?>
    <?php
        echo "</div>";
    ?>
    </body>
</html>