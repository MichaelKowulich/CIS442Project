<?php 
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}
$Name = $_POST['Name'];
$address = $_POST['address'];
$eaddress = $_POST['eaddress'];
$pnumber = $_POST['pnumber'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$baddress = $_POST['baddress'];
$cnumber = $_POST['cnumber'];
$CCV = $_POST['CCV'];
