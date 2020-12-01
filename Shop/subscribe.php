<?php
session_start();
require_once('../connection.php');
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}

$type = $_POST['dietary'];
$Dateordered = date('m/d/Y', time()+86400);
$Dateshipped = date('m/d/Y', time()+86400);
$userId = $_SESSION["id"];
$cost = 0;
$boxId = 0;
$q = "SELECT * FROM box WHERE type='$type'";
$result = mysqli_query($conn, $q);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $cost = $row["cost"];
        $boxId = $row["id"];
    }
}

$sql = "INSERT INTO subscription (type, cost, dateOrdered, dateShipped, userId, Status, boxId)
VALUES ('$type', '$cost', '$Dateordered', '$Dateshipped', '$userId', 'Active', '$boxId')";
$result = mysqli_query($conn, $sql);
if ($result)
{
    echo '<script language="javascript">';
    echo 'alert("Subscription Successful")';
    echo '</script>';
    header("Location: ../index.php");
}
else {
    echo "Error :".$sql;
}
