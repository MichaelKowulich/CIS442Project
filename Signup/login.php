<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}
require_once('../connection.php');
$uname = $_POST['uname'];
$psw = $_POST['psw'];
$password = MD5($psw);

$sql = "SELECT * FROM user WHERE username='$uname' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $email = $row["email"];
        $username = $row["username"];
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $email;
    }
    header("Location: ../Dashboard/dashboard.html");
} else {
    echo "Invald Username or Password";
}