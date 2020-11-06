<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0>
    <title>Hack N` Snacks Login / Signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
            <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn"onclick="register()">Register</button>
            </div>
            <form action="login.php" method="POST" id="login" class="input-group">
                <input type="text" class="input-field" maxlength="30" name="uname" placeholder="User ID" required>
                <input type="password" class="input-field" maxlength="50" name="psw" placeholder="Enter Password" required>
                <input type="checkbox" name="checkbox" class="check-box">
                <label for="checkbox">Remember Me</label>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <form action="http://www.itss.brockport.edu/~mkowu1/cis442/CIS442PROJECT/Signup/register.php" onsubmit="return validateReg()" method="POST" id="register" class="input-group2">
                <input type="text" class="input-field" name="name" maxlength="50" minlength="1" pattern="[a-z A-Z]{7-50}" placeholder="Full Name" required>
                <input type="text" class="input-field" name="address" maxlength="100" pattern="[a-z A-Z0-9,-]{7-100}" placeholder="Full Address" required>
                <input type="text" class="input-field" name="uname" maxlength="30" pattern="[a-zA-Z0-9]{7-50}" minlength="1" placeholder="User ID" required>
                <input type="email" class="input-field" name="email"  maxlength="50" placeholder="Email ID" required>
                <input type="password" class="input-field" id="psw" name="psw" placeholder="Enter Password" 
                title="Password must be at least 7 characters" minlength="7" maxlength="50" required>
                <input type="password" class="input-field" id="pswconfirm" name="pswconfirm" pattern="[a-zA-Z0-9]{7-50}"minlength="7" maxlength="50" 
                title="Password must be at least 7 characters" placeholder="Confirm Password" pattern="[a-zA-Z0-9]{7-50}" required>
                <input type="checkbox" name="checkbox" class="check-box">
                <label for="checkbox">Remember Me</label>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>