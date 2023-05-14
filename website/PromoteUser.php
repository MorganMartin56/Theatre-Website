<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<?php require('AdminAccess.php');?>

<div class="ForumBox">
<form action="ProcessPromote.php" method="post">
<h1 class="ForumTitle">Promote User</h1>
<br> </br>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username"required/> 
    <br> </br>
    <input type="submit" class="SubmitB" value="Promote User" onclick="Rsure()">
</form>
</div>
</body>
