<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="../style.css">
    <body>
    <header> <ul class='nav'>
             <li class='navlink'><a href='../index.php'>Home</a></li>
             <li class='navlink'><a href='#'>About</a></li>
             <li class='navlink'><a href='../Account/account_overview.php'>My Account</a></li>
             <li class='navlink'><a href='../Shop/shop.php'>Shop</a></li>
             <li class='navlink'><a href='../Signup/logout.php'>Logout</a></li>
             </ul>
            </header><br><br><br><br>
        <div class='centralize'>
            <h1 class='jumbo'>My Account</h1>

 <form action="http://www.itss.brockport.edu/~nstau1/cis442/CIS442Project/Account/update_account.php" onsubmit="return validateReg()" method="POST" id="Account" class="input-group">
  
  <label for="Uname">Username</label><br>
  <input type="text" id="uname" name="uname"><br>

  <label for="address">Street Address</label><br>
  <input type="text" id="address" name="address"><br>
  
  <label for="eaddress">Email Address</label><br>
  <input type="text" id="eaddress" name="eaddress"><br>
  
  <label for="pnumber">Phone Number</label><br>
  <input type="text" id="pnumber" name="pnumber"><br>
  
  <label for="city">City</label><br>
  <input type="text" id="city" name="city"><br>
  
  <label for="state">State</label><br>
  <input type="text" id="state" name="state"><br>
  
  <label for="zip">Zip Code</label><br>
  <input type="text" id="zip" name="zip"><br>
  
  <label for="baddress">Billing Address</label><br>
  <input type="text" id="baddress" name="baddress"><br>
 
<button type="submit">Submit Changes</button>
<button type="reset">Cancel</button> 
   
 </form>
    </body>
</html>