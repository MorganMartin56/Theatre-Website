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


//fetches the user details with erro handling
if ($result->num_rows == 1)
{
$row = $result->fetch_assoc();
}
//error handling
else
{
    echo "unable to retrieve user details";
}

$conn->close();?>



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
    <input type="password" name="confirmpassword" id="confirmpassword" value="<?php echo $row['password']?>" required/>
    <br> </br>
    <input type="submit" class="SubmitB" value="update">
</form>
</div>





















</body>
</html>