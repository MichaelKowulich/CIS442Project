<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}
$uname = $_POST['uname'];
$address = $_POST['address'];
$eaddress = $_POST['email'];
