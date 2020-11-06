<?php
require_once('../connection.php');
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}

$name = $email = $address = $uname = $psw = '';

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$uname = $_POST['uname'];
$psw = $_POST['psw'];
$password = MD5($psw);

$sql = "INSERT INTO user (username, password, email, address, name)
VALUES ('$uname', '$password', '$email', '$address', '$name')";
$result = mysqli_query($conn, $sql);
if ($result)
{
    header("Location: ../index.php");
}
else {
    echo "Error :".$sql;
}
