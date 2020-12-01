<?php 
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}
$uname = $_POST['uname'];
$address = $_POST['address'];
$eaddress = $_POST['eaddress'];
$pnumber = $_POST['pnumber'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$baddress = $_POST['baddress'];
if (!isset($_SESSION['username'])) {
    exit;
}
require_once('../account_overview.php');
$uname = $_SESSION['username'];
$uid = $_SESSION['id'];
$sql = "SELECT * FROM user WHERE userId='$uid' AND status='Active'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $address = $row["address"];
        $uname = $row["username"];
        $eaddress = $row["eaddress"];
        $pnumber = $row["pnumber"];
        $city = $row["city"];
        $state = $row["state"];
        $zip = $row["zip"];
        $baddress = $row["baddress"];
        echo " 
        <input type='text' name='uname' value='$uname'>
        <label for='uname'> Username </label>
        <input type='text' name='address' value='$address'>
        <label for='uname'>Street address </label>
        <input type='text' name='eaddress' value='$eaddress'>
        <label for='uname'>Email address </label>
        <input type='text' name='pnumber' value='$pnumber'>
        <label for='uname'>Phone number </label>
        <input type='text' name='eaddress' value='$city'>
        <label for='uname'>City </label>
        <input type='text' name='state' value='$state'>
        <label for='uname'>State </label>
        <input type='text' name='zip' value='$zip'>
        <label for='uname'>Zip </label>
        <input type='text' name='baddress' value='$baddress'>
        <label for='uname'>Billing address </label>"; 
    }   
}  
