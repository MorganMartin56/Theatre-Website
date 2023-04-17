<!-- PHP Link to head template -->
<?php require('header/head.php');?>

<!-- Container -->
<div class="ForumBox">
<h1 class="ForumTitle">Create Account</h1>


<!--This is the create account forum box-->
<form action="ProcessAccountCreation.php" method="post">
    <label for="username">Username:</label>
    <input type="text" placeholder="John Doe" name="username" id="username" required/>
    <br> </br>
    <label for="email">Email:</label>
    <input type="email" placeholder="JohnDoe@Gmail.com" name="email" id="email" required/>
    <br> </br>
    <label for="password">Password:</label>
    <input type="password" placeholder="P@SSW0RD" name="password" id="password" required/>
    <br> </br>
    <label for="password">Password:</label>
    <input type="password" placeholder="P@SSW0RD" name="confirmpassword" id="password" required/>
    <br> </br>
    <label for="terms">You agree to our terms and conditions</label>
    <input type="checkbox" name="terms" id="terms" required/>
    <br> </br>
    <input type="submit" class="SubmitB" value="submit">
</form>
</div>

































</body>
</html>