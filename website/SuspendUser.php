<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require('AdminAccess.php');?>

<div class="ForumBox">
<form action="ProcessSuspention.php" method="post">
<h1 class="ForumTitle">Suspend User</h1>
<br> </br>
    <label for="username">Username:</label>
    <input type="text" name="username"required/> 
    <br> </br>
    <input type="submit" class="SubmitB" value="Suspend User" onclick="Rsure()">
</form>
</div>
</body>

