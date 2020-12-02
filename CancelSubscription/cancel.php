<?php
session_start();
require_once('../connection.php');
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}

$userid = (int)$_SESSION["id"];
$Sid = $_POST["subscriptions"];

$sql = "UPDATE subscription
SET Status = 'Inactive'
WHERE userId = $userid AND id = '$Sid'";

$result = mysqli_query($conn, $sql);
if ($result)
{
    header("Location: ../Dashboard/dashboard.php");
}
else {
    echo "Error : Could not cancel subscription, please contact support at 555-5555";
}
