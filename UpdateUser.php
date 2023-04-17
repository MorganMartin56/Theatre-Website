<!-- PHP Link to head template -->
<?php require('header/head.php');?>
<!-- PHP checks for login -->
<?php require('checklogin.php')?>
<!-- PHP Link DB -->
<?php require('db-access.php');?>

<?php 
$user_id = $_SESSION['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];


//PREPARED STATEMENT
$stmt = $conn->prepare("UPDATE users SET username = ?, email = ?, password = ? WHERE user_id = ?");

//bind parameters
$stmt->bind_param("sssi", $username, $email, $password, $user_id);


//Execute
if($stmt->execute() == true)

{
    echo "<h1 class=\"results\">Updated information was sent successfully<h1>";
}
   //This is for debugging purposes
else
{

    echo "<h1 class=\"results\">Updated information was sent unsuccessfully<h1>";
}

$conn->close();?>

