<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}
require_once('../connection.php');

$userId = $_SESSION['id'];
$address = $_POST['address'];
$email = $_POST['email'];
$name = $_POST['name'];

$sql = "UPDATE user SET address='$address',email='$email',name='$name' WHERE id=$userId";

$result = mysqli_query($conn, $sql);
if ($result)
{
    header("Location: ../Dashboard/dashboard.php");
}
else {
    echo "Error :".$sql;
}
