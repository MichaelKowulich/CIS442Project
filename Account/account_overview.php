<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="../style.css">
    <head>
        <h1> Account Settings </h1>
    </head>
    <body>
 <form action="http://www.itss.brockport.edu/~mkowu1/cis442/CIS442PROJECT/Account/update_account.php" onsubmit="return validateReg()" method="POST" id="Account" class="input-group">
  
  <label for="Name">Name</label><br>
  <input type="text" id="Name" name="Name" size="15" maxlength="30"><br>
  
  <label for="address">Street Address</label><br>
  <input type="text" id="address" name="address" size="15" maxlength="30"><br>
  
  <label for="eaddress">Email Address</label><br>
  <input type="text" id="eaddress" name="eaddress" size="15" maxlength="30"><br>
  
  <label for="pnumber">Phone Number</label><br>
  <input type="text" id="pnumber" name="pnumber" size="15" maxlength="30"><br>
  
  <label for="city">City</label><br>
  <input type="text" id="city" name="city" size="15" maxlength="30"><br>
  
  <label for="state">State</label><br>
  <input type="text" id="state" name="state" size="15" maxlength="30"><br>
  
  <label for="zip">Zip Code</label><br>
  <input type="text" id="zip" name="zip" size="15" maxlength="30"><br>
  
  <label for="baddress">Billing Address</label><br>
  <input type="text" id="baddress" name="baddress" size="15" maxlength="30"><br>
     
  <label for="cnumber">Card Number</label><br>
  <input type="text" id="cnumber" name="cnumber" size="15" maxlength="30"><br>
     
  <label for="CCV">CCV</label><br>
  <input type="text" id="CCV" name="CCV" size="15" maxlength="30"><br>
     
     
<button type="submit">Submit Changes</button>
<button type="reset">Cancel</button> 
   
        </form>
  
    </body>
</html>
