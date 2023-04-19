<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<!-- PHP checks for login -->
<?php require('checklogin.php')?>
<!-- PHP Link DB -->
<?php require('db-access.php');

//This finds the user with user_id
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE user_id = $user_id";
$result = $conn->query($sql);


if ($result->num_rows == 1)
{
$row = $result->fetch_assoc();
}
//error handling
else
{
    echo "unable to retrieve user details";
}
?>


<div class=ForumContainerAdmin> 
<!--Account Information-->
<div class="ForumBox">
<h1 class="ForumTitle">Update Account</h1>
<form action="UpdateUser.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?php echo $row['username']?>" required/>
    <br> </br>
    <label for="email">Email:</label>
    <input type="email"  name="email" id="email" value="<?php echo $row['email']?>" required/> 
    <br> </br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" value="<?php echo $row['password']?>" required/>
    <br> </br>
    <label for="password">Confirm Password:</label>
    <input type="password" name="confirmpassword" id="password" value="<?php echo $row['password']?>" required/>
    <br> </br>
    <input type="submit" class="SubmitB" value="update">
</form>
</div>


<div class="AdminBox">
<h1 class="PanelTitle">Admin Panel</h1>
<div class="UserList">

<?php

//This finds the user with user_id
if (isset($_GET['Find']))
{
$Search = $_GET['Find'];
$sql = "SELECT * FROM users WHERE user_id";
}
else
{
   $sql = "SELECT * FROM users";
}

$result = $conn->query($sql);

if($result->num_rows > 0)
{
while ($row = $result->fetch_assoc())
{
   echo "<a class=\"names\" href=\"\">" .$row['username']. "</a>";
}
}
//error handling
else
{
      echo "<h1 class=\"results\">0 results were found<h1>";
}

$conn->close();
?>
</div>
<div class="UserOptions">

<form method="post" action="SuspendUser.php">
    <button class="SuspendUser" type="submit" name="suspend_button">Suspend</button>
</form>

<form method="post" action="PromoteUser.php">
    <button class="PromoteUser" type="submit" name="promote_button">Promote</button>
</form></div>


<div class="ForumOptions">
<form method="post" action="CreatePost.php">
    <button  class="CreatePost" type="submit" name="createpost_button">Create Post</button>
</form>
<form method="post" action="ModifyPost.php">
    <button class="ModifyPost" type="submit" name="modifypost_button">Modify Post</button>
</form>
<form method="post" action="Delete.php">
    <button class="DeletePost" type="submit" name="DeletePost_button">Delete Post</button>
</form>
</div>
</div>
</div>











</body>
</html>