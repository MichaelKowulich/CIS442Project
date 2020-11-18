<?php
session_start();
require_once('../connection.php');
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}

$userid = (int)$_SESSION["id"];
$type = $_POST["subscriptions"];

$sql = "UPDATE subscription
SET Status = 'Inactive'
WHERE userId = $userid AND type = '$type'";

$result = mysqli_query($conn, $sql);
if ($result)
{
    header("Location: ../Dashboard/dashboard.php");
}
else {
    echo "Error :".$sql;
}
