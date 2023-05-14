<!-- PHP Link to head template -->
<?php require('header/head.php')?>
<!-- PHP checks for login -->
<?php require('checklogin.php')?>
<!-- PHP Link DB -->
<?php require('db-access.php');


//This finds the user with user_id
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE user_id = $user_id";
$result = $conn->query($sql);?>


<h1 class="PanelTitle2">Admin Panel</h1>


<!--Admin user Options-->
<div class="UserOptions2">
<form method="post" action="SuspendUser.php">
    <button class="SuspendUser2"  type="submit" name="suspend_button">Suspend</button>
</form>

<form method="post" action="PromoteUser.php">
    <button class="PromoteUser2" type="submit" name="promote_button">Promote</button>
</form></div>

<!--Account Posts Options---->
<div class="ForumOptions">
<form method="post" action="CreatePost.php">
    <button  class="CreatePost2" type="submit" name="createpost_button">Create Post</button>
</form>
<form method="post" action="ModifyPost.php">
    <button class="ModifyPost2" type="submit" name="modifypost_button">Modify Post</button>
</form>
<form method="post" action="DeletePost.php">
    <button class="DeletePost2" type="submit" name="DeletePost_button">Delete Post</button>
</form>
</div>
</div>
</div>











</body>
</html>